<?php

require_once("markdown/markdown.php");
require_once("markdown/geshi.php");
require_once("webixstruct.php");

class webixMark{
	private static $uid = 1;
	private static $cache = array();
	private static $useCache = false;

	public static function get($name, $config, $master = false){
		$name = preg_replace("|\\.html$|", ".md", str_replace("__","/",$name));

		if (webixMark::$useCache){
			if (!isset(webixMark::$cache[$name]))
				webixMark::$cache[$name] = new webixMark($name, $config, $master);
			return webixMark::$cache[$name];
		}
		return new webixMark($name, $config, $master);
	}

	public static function id(){
		webixMark::$uid = webixMark::$uid+1;
		return webixMark::$uid;
	}


	function __construct($name, $config, $master = false){
		if (!is_array($config)) 
			die("Invalid config file");
		
		$this->errors = array();
		$this->config = $config;

		$this->var_pull = array();
		$this->var_trigger = array();
		$this->gvar_trigger = array();

		$this->layout = false;
		$this->samples = array();

		$this->master = $master;
		
		$this->name = $name; 
		$this->url = str_replace("/", "__", str_replace(".md",".html",$this->name));
		$this->index = new DocPage($this->name, "");
		$this->id = md5($this->url);

		$path = dirname(__FILE__)."/data/".$this->name;
		if (!file_exists($path)){
			//echo("<p>Missed page: ".$path."</p>");
			$this->data = "";
		} else {
			$this->data = $this->file_get_contents($path);
			
			$this->initTriggers();

			foreach($config as $k => $v)
				$this->set_var($k, $v);

			$this->explode_page();
		}
	}

	function file_get_contents($path){
		$lang = $this->config["lang"];
		if ($lang != ""){
			$newpath = str_replace(".md", ".".$lang.".md", $path);
			if (!file_exists($newpath) && file_exists($path)){
				$data = file_get_contents($path);
				$pos = strrpos($data, "===");
				if ($pos === false)
					return "".$data;
				else
					return substr($data,0, $pos+3)."\n\n{{todo translate}}\n\n".substr($data, $pos+3);
			} else
				return file_get_contents($newpath);
		}
		return file_get_contents($path);
	}
	//check is file really exists
	function has_file(){
		return is_file(dirname(__FILE__)."/data/".$this->name);
	}
	function get_section($name){
        if ($name == "data")
            return $this->data;

		$matches = array();
		if (preg_match("#\n@".$name.":([^\f]*?)(\n@|$)#",$this->data, $matches))
			return $matches[1];
		return "";
	}
	function write_section($name, $value){
		$content = "\n@".$name.": \n\t".$value."\n";
		if ($this->has_var($name)){
			$this->data = preg_replace("#\n@".$name.":[^\f]*?(\n@|$)#",$content."\\1",$this->data);
		} else {
			$this->data = $this->data.$content;
		}
		file_put_contents("data/".$this->name, $this->data);
	}


	function initTriggers(){
		$this->addTrigger("todo", new webixToDoHandler());
		
		$this->addTrigger("note", new webixNoteHandler());
		$this->addTrigger("complexity", new webixComplexity());
		$this->addTrigger("wrong", new webixWrongHandler());
		$this->addTrigger("memo", new webixMemoHandler());
		$this->addTrigger("sample", new webixSampleHandler());
		$this->addTrigger("values", new webixValuesHandler());
		$this->addTrigger("snippet", new webixSnippetHandler());

		$this->addTrigger("index", new webixIndexHandler());
		$this->addTrigger("short", new webixMarkDownHandler());
		$this->addTrigger("descr", new webixMarkDownHandler("<h2>Details</h2>"));
		$this->addTrigger("example", new webixJSCodeHandler());
		$this->addTrigger("callback", new webixCallbackHandler());
		$this->addTrigger("params", new webixParamsHandler());
		$this->addTrigger("callbackreturns", new webixCallbackReturnsHandler());
		$this->addTrigger("returns", new webixReturnsHandler());

		$this->addTrigger("related", new webixLinkListHandler());
		$this->addTrigger("relatedapi", new webixLinkListHandler("api"));
		$this->addTrigger("relatedsample", new webixLinkListHandler("sample"));

		$this->addTrigger("links", new webixLinksHandler());

		$this->addGetTrigger("signature", new webixSignateHandler());
		$this->addGetTrigger("signatureCallback", new webixSignateCallbackHandler());
		$this->addGetTrigger("signatureOption", new webixSignateOptionHandler());
		
		$this->addGetTrigger("relatedSection", new webixRelatedHandler());
		
	}
	function addTrigger($name, $obj){
		$this->var_trigger[$name] = $obj;
	}
	function addGetTrigger($name, $obj){
		$this->gvar_trigger[$name] = $obj;
	}

	function explode_page(){
		$this->processParent();

		$data = $this->processVars($this->data);
		$data = $this->processInlines($data);
		$data = $this->processSections($data);
		$data = $this->processLinks(Markdown($data));
		$data = $this->processImages($data);
		$this->set_var("data", $data);
		$this->set_var("title", $this->getName());
	}
	function processInlines($data){
		$data = preg_replace_callback("#\\{\\{([a-z]*)([^\\f]*?)\\}\\}#", array($this, "replaceInlines"), $data);
		return $data;
	}
	function processImages($data){
		$data = preg_replace("#(<img[^>]*src\\=(\"|'))([^\"']*)#", '$1media/$3', $data);
		return $data;
	}
	function replaceInlines($data){
		$name = $data[1];
		$value = $data[2];
		return $this->set_var($name, $value, true);
	}

	function processSections($data){
		$matches = array();
		preg_match_all("#@([a-z]*):([^@]*)#", $data, $matches);
		$keys = $matches[1];
		$vals = $matches[2];
		for($i=0; $i<sizeof($keys); $i++)
			$this->set_var($keys[$i], trim($vals[$i]));
		return preg_replace("#@([a-z]*):[^\\f]*#","", $data);
	}
	function processLinks($data){
		$data = preg_replace_callback("#href=\"([^\"]*)\\.md([^\"]*)\"#", array($this, "replaceLinks"), $data);
		$data = preg_replace_callback("#([A-Za-z\\/_\\.]+)\\.md#", array($this, "replaceExtraLinks"), $data);
		return $data;
	}
	function replaceLinks($data){
		$text = str_replace("/", "__", $data[1]);
		return 'href="'.strtolower($text).'.html'.$data[2].'"';
	}
	function replaceExtraLinks($data){
		$title = $this->getPageTitle($data[0]);
		$data = str_replace("/", "__", $data[1]);

		return '<a href="'.strtolower($data).'.html">'.$title.'</a>';
	}
	function processVars($data){
		return preg_replace_callback("#\\$\\$[{]*([a-zA-Z0-9][a-zA-Z0-9_?]*)[}]*#", array($this, "replace_vars"), $data);
	}
	function processSampleName($data, $details = false){
		$file = $this->config["sample_path"].$data;
		if (!file_exists($file)){
			$message = "Error sample: ".$data;
			$this->errors[] = $message;
			return "<span class='webixdoc_error'>".$message."</span>";
		}

		$sample_data = array();
		preg_match("|<title>(.*)</title>|", file_get_contents($file), $sample_data);
		if (sizeof($sample_data)<2 || $sample_data[1] == ""){
			$message = "Sample without title: ".$data;
			$this->errors[] = $message;
			return "<span class='webixdoc_error'>".$message."</span>";
		}
			
		$name = "<a target='blank' href='".$this->config["sample_http"].$data."'>".$sample_data[1]."</a>";

		$newsample = array($this->config["sample_http"].$data, $sample_data[1]);
		if ($details === true)
			return $newsample;

		$this->samples[] = $newsample;

		return $name;
	}
	function processParent(){
		$struct = webixStruct::get($this->config);
		if ($struct !== null){
			$parent = $struct->getParentLine($this->id, true);
			$html = array();
			//page is not in the index, probably normalization is required
			if ($parent === null) return;

			foreach($parent as $k => $v)
				$html[] = "<a href='".$struct->getURL($v)."' class='webixdoc_back'>".$struct->getTitle($v)."</a>";

			$this->set_var("back", implode("",$html));

			$shtml = "";

			//sub-articles
			$childs = $struct->getChildLine($this->id);
			if (strpos($this->name, "api/") !== 0){
				if ($childs!=null){
					$shtml .= "<ul>";
					foreach($childs as $v){
						$shtml .= "<li class='sub'><a href='".$struct->getURL($v)."'>".$struct->getTitle($v)."</a></li>"; 
					}
					$shtml .= "</ul>";
				}
			}

			//sections
			$sections = $struct->getSectionsLine($this->id);
			if ($sections !== null){
				$shtml .= "<ul>";
				foreach($sections as $k=>$v)
					$shtml .= "<li><a href='#".$v[0]."'>".$v[1]."</a></li>"; 
				$shtml .= "</ul>";
			}


			if (sizeof($parent)>0){
				$siblings = $struct->getSiblingLine($parent[sizeof($parent)-1]);
				if ($siblings !== null){
					$html = array();
					foreach($siblings as $k => $v){
						if ($v != $this->id)
								$html[] = "<li>";
						else
							$html[] = "<li class='webix_current'>";

						$html[] = "<a href='".$struct->getURL($v)."'>".$struct->getTitle($v)."</a></li>";

						if ($v == $this->id && $shtml !== "")
							$html[] = $shtml;
					}
					
					$this->set_var("toc", "<ul>".implode("",$html)."</ul>");
				}
			}
		}
	}
	function setLayout($page){
		$this->layout = $page;
	}
	function process_related($data){
		$html = "";
		if (sizeof($this->samples)){
			$html.="<h3>Mentioned samples</h3><ul>";
			for ($i=0; $i<sizeof($this->samples); $i++)
				$html.= "<li><a href='".$this->samples[$i][0]."'>".$this->samples[$i][1]."</a></li>";
			$html.="</ul>";
		}

		if ($html)
			$html = "<div class='webixdoc_mentioned'>".$html."</div>";

		$this->set_var("mentioned", $html);
	}
	function render(){
		if ($this->has_var("link")){
			$refer = webixMark::get($this->get_var("link"), $this->config, $this);
			if ($this->layout) 
				$refer->setLayout($this->layout);
			$this->copy_var($refer);
			return $refer->render();
		}

		//$this->process_related();

		$template = $this->get_var("template?");
		if ($template == "")
			$template = "article";

		if ($this->has_var("pageclass") && $this->get_var("pageclass")=="start")
			$this->set_var("discuss","");

		if ($this->get_var("layout?"))
			$layout = $this->get_var("layout?");
		else if ($this->layout)
			$layout = $this->layout;
		else 
			$layout = "layout.html";
		$master = file_get_contents(dirname(__FILE__)."/template/$layout");
		$data = file_get_contents(dirname(__FILE__)."/template/$template.html");
		return $this->processVars(str_replace('$$data', $data, $master));
	}
	function replace_vars($data){
		$var_name = $data[1];
		return  $this->get_var($var_name);
	}
	function copy_var($target){
		foreach($this->var_pull as $k => $v){
			if ($k != "link" && $k!= "data"){
				$target->var_pull[$k]=$v;
			}
		}
	}
	function set_var($name, $data, $trigger_only = false){
		if (array_key_exists($name, $this->var_trigger))
			$data = $this->var_trigger[$name]->process($data, $this, $name);
		if ($trigger_only)
			return $data;

		$this->var_pull[$name] = $data;
	}
	function save_var($name, $data){
		if ($this->has_file()){
			$this->write_section($name, $data);
			$this->set_var($name, $data);
			return true;
		}
		return false;
	}
	function has_var($name){
		return array_key_exists($name, $this->var_pull);
	}
	function get_var($name, $ignore = false){
		if (strpos($name,"?")){
			$ignore = true;
			$name = str_replace("?", "", $name);
		}
		
		if (array_key_exists($name, $this->var_pull))
			return $this->var_pull[$name];
		if (array_key_exists($name, $this->gvar_trigger)){
			$value = $this->gvar_trigger[$name]->process($this, $name);
			$this->set_var($name, $value);
			return $value;
		}
		if ($ignore)		
			return "";

		$error = "ERROR_VAR: $name";
		$this->errors[] = $error;
		return "<h1>$error</h1>";
	}

	function getSections(){
		$result = array();

		$matches = array();
		$html = $this->get_var("data");
		preg_match_all("#<a name='([^\f]*?)'>[^<]*<h2[^>]*>([^<]*?)<#", $html, $matches);

		$num = sizeof($matches[0]);
		if ($num == 0)
			return null;
		for ($i=0; $i<$num; $i++)
			$result[]=array($matches[1][$i], $matches[2][$i]);

		return $result;
	}
	function getName(){
		return  $this->_getName($this->data, $this->name);
	}
	function getPageTitle($path){
		//detect and removes in-page links
		$sharp = strpos($path, "#");
		if ($sharp !== false)
			$path = substr($path, 0, $sharp);

		if (!is_file(dirname(__FILE__)."/data/".$path)){
			$error = "ERROR:invalid link:";
			$this->errors[] = $error.$path;
			return $error;
		}
		$data = $this->file_get_contents(dirname(__FILE__)."/data/".$path);
		return $this->_getName($data, $path);
	}
	function get_title(){
		$index = strpos($this->data, "====");
		if ($index === false)
			$index = strpos($this->data, "\n");
		if ($index === false)
			return "";

		return trim(substr($this->data, 0, $index));
	}
	function _getName($data, $path){
		$link = strpos($data, "@link:");
		if ($link !== false){
			$name = explode("\n",trim(substr($data, $link+6)));
			return $this->getPageTitle(trim($name[0]));
		}

		$index = strpos($data, "====");
		if ($index === false){
			$index = strpos($data, "\n");
			if ($index == false){
				$error = "ERROR:header:";
				$this->errors[] = $error.$path;
				return $error;				
			}
		}

		$text = trim(substr($data, 0, $index));
		if ($text == ""){
			$error = "ERROR:header:";
			$this->errors[] = $error.$path;
			return $error;
		} else 
			return $text;
	}

	function forEachPage($method, $ind=0){
		$index = $this->get_var("indexStruct?");
		if ($index)
			$index->forEachPage($method, $this, $ind+1);
	}

	function forEachPageA($method, $ind=0){
		if (call_user_func($method, $this, $this->index, $ind, false) !== -1)
			$this->forEachPage($method, $ind);
	}
}


class webixToDoHandler{
	function process($data, $mark, $name){
		$mark->errors[] = "TODO: ".$data;
		return "<div class='webixdoc_todo'><h3>Todo:</h3>".Markdown($data)."</div>";
	}
}

class webixMarkDownHandler{
	var $code;
	function __construct($code=""){
		$this->code = $code;
	}
	function process($data, $mark, $name){
		if ($data == "") return "";
		
		$mark->set_var($name."!", $data);
	
		$data =  Markdown($this->code.$data);
		$data = $mark->processLinks($data);
		return $mark->processImages($data);
	}
}

class webixSignateOptionHandler{
	function process($mark, $name){
		$type = $mark->get_var("type?");
		$name = $mark->getName();

		$newsig = "<em>".str_replace(",","|",$type)."</em> <b>".$name."</b>;";
		return "<div class='webixdoc_sign'>".$newsig."</div>";
	}
}
class webixSignateCallbackHandler{
	function process($mark, $name){
		$index = $mark->get_var("params?");
		$return = $mark->get_var("returns?");
		$name = $mark->getName();

		$newsig = "";
		if ($return == "")
			$newsig .= "<em>void</em> ";
		else 
			$newsig .= "<em>".implode("|",$return['type'])."</em> ";

		$newsig.=" ".$name."(";
		$optional = false;

		if ($index != "")
			for ($i=0; $i<sizeof($index["_keys"]); $i++){
				$key = $index["_keys"][$i];
				if (!$optional && $index[$key]["optional"]){
					$newsig .= " [";
					$optional = true;
				}
				if ($i!=0)
					$newsig .= ", ";
				$newsig .= "<em>".implode("|",$index[$key]["type"])."</em> <b>".$key."</b>";
			}
		
		if ($optional) 
			$newsig .="] ";
		$newsig.="){ ... };";
			
		return "<div class='webixdoc_sign'>".$newsig."</div>";
	}
}
class webixSignateHandler{
	function process($mark, $name){
		$index = $mark->get_var("params?");
		$return = $mark->get_var("returns?");
		$name = $mark->getName();

		$newsig = "";
		if ($return == "")
			$newsig .= "<em>void</em> ";
		else 
			$newsig .= "<em>".implode("|",$return['type'])."</em> ";

		$newsig.="<b>".$name."</b>(";
		$optional = false;

		if ($index != "")
			for ($i=0; $i<sizeof($index["_keys"]); $i++){
				$key = $index["_keys"][$i];
				if (!$optional && $index[$key]["optional"]){
					$newsig .= " [";
					$optional = true;
				}
				if ($i!=0)
					$newsig .= ", ";
				$newsig .= "<em>".implode("|",$index[$key]["type"])."</em> <b>".$key."</b>";
			}

		if ($optional) 
			$newsig .="] ";
		$newsig.=");";
			
		return "<div class='webixdoc_sign'>".$newsig."</div>";
	}
}

function webixdocs_process_param($data, $optional = false){
	$code = preg_split("#[\t][\t ]*|[ ]{2,}#", $data,3);
	if (sizeof($code) <3) return false;

	$types = explode(",", trim($code[1]));
	$code[2] = SimpleMarkdown($code[2]);
	$result = array(
		"type" => $types,
		"descr" => $code[2],
		"html" => "<tr class='".($optional?"optional":"")."'><td class='col1'>$code[0]</td><td>$code[2]</td></tr>",
		"name" => $code[0],
		"optional" => $optional
	);
	return $result;
}
function webixdocs_process_params($data){
		$params = explode("\n", $data);
		$command = array( "_keys" => array());
		$optional = false;
		$list = array();
		$html="<table class='webixdoc_apitable' cellspacing='0' cellpadding='0'>";

		for ($i=0; $i<sizeof($params); $i++){
			$msig = strpos($params[$i], "-");
			if ($msig !== false){
				$params[$i] = trim(substr($params[$i], $msig+1));
			} else {
				$msig = strpos($params[$i], "*");
				if ($msig !== false){
					$params[$i] = trim(substr($params[$i], $msig+1));
					$optional = true;
				} else {
					$params[$i] = trim(substr($params[$i], $msig+1));
				}
			}
				
			$code = trim($params[$i]);
			if ($code == "") continue;
			$code = webixdocs_process_param($params[$i], $optional);
			$command[$code["name"]]	= $code;
			$html.=$code["html"];
			$command["_keys"][] = $code["name"];
			$list[] = "<strong>".$code["name"]."</strong>";
		}

		$html.="</table>";

		return array($command, $html, implode(", ",$list));
}

class webixValuesHandler{
	function process($data, $mark, $name){
		$lines = explode("\n", $data);

		$values = array();
		$text = "";
		foreach ($lines as $line){
			$msig = strpos($line, "-");
			if ($msig === false)
				$msig = strpos($line, "*");
			if ($msig !== false)
				$line = substr($line, $msig+1);
			$line = trim($line);

			$line = preg_split("#[\t][\t ]*|[ ]{2,}#", $line, 2);
			if (sizeof($line) <2)
				$text.="<li><i>".$line[0]."</i></li>";
			else 
				$text.="<li><i>".$line[0]."</i> - ".$line[1]."</li>";
			$values[] = $line;
		}

		if ($text)
			$mark->set_var("valuesHTML", "<p>Possible values of parameter: <ul>".$text."</ul></p>\n\n");

		return $values;
	}
}
class webixParamsHandler{
	function process($data, $mark, $name){
		$values = webixdocs_process_params($data);

		$html="<div class='webixdoc_params'>".$values[1]."</div>";
		$mark->set_var("paramsHTML", "<h4>Parameters</h4>".$html);
		return $values[0];
	}
}

class webixCallbackHandler{
	function process($data, $mark, $name){
		$values = webixdocs_process_params($data);

		$html="<h4>Callback:</h4><div class='webixdoc_sign'>function callback(".$values[2]."){...}</div><div class='webixdoc_params'>".$values[1]."</div>";
		$mark->set_var("callbackHTML", $html);
		return $values[0];
	}
}

class webixCallbackReturnsHandler{
	function process($data, $mark, $name){
		$code = webixdocs_process_param(trim(preg_replace("#(^|\n)[ \t]*-#","",$data)));
		$html = "<h4>Callback return value</h4><div class='webixdoc_params'><p>";
		$mark->set_var("callbackreturnsHTML", $html.$code["descr"]."</p></div>");
		return $code;
	}
}

class webixReturnsHandler{
	function process($data, $mark, $name){
		$code = webixdocs_process_param(trim(preg_replace("#(^|\n)[ \t]*-#","",$data)));
		if ($code === false){
			$error = "Invalid return parameter";

			$mark->set_var("returnsHTML", $error);
			$mark->errors[] = $error;
			return $error;
		}

		$html = "<h4>Return value</h4><div class='webixdoc_params'><p>";
		$mark->set_var("returnsHTML", $html.$code["descr"]."</p></div>");
		return $code;
	}
}


class webixJSCodeHandler{
	function process($data, $mark, $name){
		if (trim($data) == "") return "";
		return "<h4>Example</h4><p>".Markdown("~~~js\n".$data."\n~~~")."</p>";
	}
}

class webixLinkListHandler{
	var $type;
	function __construct($type=""){
		$this->type = $type;		
	}
	function isApi($url){
		return (strpos($url,"api/") === 0);
	}
	function info($url){
		$parts = explode("/", $url);
		$url = array_pop($parts);

		return explode("_", $url,2);
	}
	function process($data, $mark, $name){
		$data = preg_split("@[-,\n\t\r ]+@", $data);
		$html = array();
		for ($i=0; $i < sizeof($data); $i++){ 
			$chunk = strtolower(trim($data[$i]));
			if ($chunk == "") continue;
			if ($this->type == "sample"){
				$html[] = $mark->processSampleName($chunk);
			} else {
				if ($this->type == "api"){
					if ($mark->master && $this->isApi($chunk) && $this->isApi($mark->master->name)){
						$now = $this->info($chunk);
						$then = $this->info($mark->master->name);
						
						if (count($then) > 1 && count($now) > 1){
							if ($now[0] != $then[0]){
								$test1 = "api/link/";
								$test2 = "api/";
								$test3 = strtolower($then[0]."_".$now[1]);
							}
							if (isset($test1) && isset($test3) && file_exists("data/".$test1.$test3))
								$chunk = $test1.$test3;
							else if (isset($test2) && isset($test3) && file_exists("data/".$test2.$test3))
								$chunk = $test2.$test3;
						}
					}
				}
				$href = str_replace("/","__",str_replace(".md",".html", $chunk));
				$title = $mark->getPageTitle($chunk);
				$html[] = "<a href='$href'>$title</a>";
			}
		}
		return implode(", ", $html);
	}
}


class webixLinksHandler{
	function process($data, $mark, $name){
		$data = explode("\n", $data);
		$html = array();
		for ($i=0; $i < sizeof($data); $i++){ 
			$minus = strpos($data[$i], "-");
			if ($minus === false)
				continue;

			
			$chunk = substr($data[$i], $minus+1);
			$parts = explode(" - ", $chunk);

			$chunk = trim($parts[0]);
			if ($chunk == "") continue;
			@$details = trim($parts[1]);
			
			$href = str_replace("/","__",str_replace(".md",".html", $chunk));
			$title = $mark->getPageTitle($chunk);
			$html[] = "<tr><td class='webixdoc_links0'><a href='$href'>$title</a></td><td>$details</td></tr>";
		}
		return "<table class='webixdoc_links'>".implode("", $html)."</table>";
	}
}

class webixNoteHandler{
	function process($data, $mark, $name){
		return "<div class='webixdoc_note' markdown='1'>".$data."</div>";
	}
}

class webixComplexity{
	function process($data, $mark, $name){
		$style = "";
		$text =  "";
		if ($data == "1"){
			$text = "Beginner";
			$style = "#80B300";
		} else if ($data == "3"){
			$text = "Advanced";
			$style = "#FF0000";
		} else if ($data == "2"){
			$text = "Intermediate";
			$style = "#D2B48C";
		}

		if ($text)
			return "<div class='dhx_doc_complex' style='color:".$style."'>".$text."</div>";
		return "";
	}
}

class webixWrongHandler{
	function process($data, $mark, $name){
		return "<div class='webixdoc_wrong' markdown='1'>".$data."</div>";
	}
}

class webixMemoHandler{
	private $start;
	function __construct(){
		$this->start = 0;
	}
	function process($data, $mark, $name){
		$data = trim($data);

		$this->start++;
		$mark->set_var("memo".$this->start, $data);

		return $data;
	}
}

class webixSnippetHandler{
	private $start;
	function __construct(){
		$this->start = 0;
	}
	function process($data, $mark, $name){
		$this->start++;
		return "<p class='webixdoc_snippet' markdown='1'><span>[".$this->start."] </span>".$data."</p>";
	}
}
class webixRelatedHandler{
	function process($mark, $name){
		$samples = $mark->get_var("relatedsample?");
		$articles = $mark->get_var("related?");
		$apis = $mark->get_var("relatedapi?");

		if ($samples == "" && $articles == "" && $apis == "")
			return "";

		$html  = "<h4>See also</h4><table class='webixdoc_apitable'>";
		if ($apis!="")
			$html.="<tr><td class='col4'>api</td><td>".$apis."</td></tr>";
		if ($samples!="")
			$html.="<tr><td class='col4'>samples</td><td>".$samples."</td></tr>";
		if ($articles!="")
			$html.="<tr><td class='col4'>articles</td><td>".$articles."</td></tr>";
		$html .= "</table>";
	
		return $html;

	}
}
class webixSampleHandler{ 
	function process($data, $mark, $name){
		$data = trim($data);
		$name = $mark->processSampleName($data, true);
		return "<a href='".$name[0]."' target='blank'><span class='webixdoc_sample'>Related sample: </span>&nbsp;".$name[1]."</a>";
	}
}

class DocPage{
	function __construct($name, $file){
		$this->name = $name;
		$this->file = $file;
		$this->child = array();
	}
	function addChild($page){
		$this->child[]=$page;
	}
	function forEachPage($method, $page, $index=0){
		for ($i=0; $i<sizeof($this->child); $i++){
			$sub = $this->child[$i];
			if ($sub->file){
				$subpage = webixMark::get($sub->file, $page->config);
				if ($page->layout) 
					$subpage->setLayout($page->layout);
			}else 
				$subpage = false;

			if (call_user_func($method, $subpage, $sub, $index, $page) !== -1){
				if ($subpage)
					$subpage->forEachPage($method, $index);
			}

			$this->child[$i]->forEachPage($method, $page, $index+1);
		}
	}
}

class webixIndexHandler{
	function process($data, $mark, $name){
		$index = $mark->index;
		$pointer = $index;
		$linestack = array(); $laststack = array();
		$last = null;

		$rows = explode("\n", $data);
		$html = "<ul>";
		$last_ident = 0;

		for ($i=0; $i<sizeof($rows); $i++){
			$line = $rows[$i];
			$ind = strpos($line, "-");
			if ($ind === false) continue;

			$name =  trim(substr($line, $ind+1));
			$file = strpos($line,".md");
			$white = substr($line, 0, $ind);
			$ident = substr_count($white," ")+substr_count($white,"\t")*4;


			$count = $ident-$last_ident;
			if ($count!=0){
				if ($count>0)
					for  ($j=0; $j<$count; $j+=4){
						$html.="<ul>";
						$linestack[] = $pointer;
						$laststack[] = $last;
						$pointer = $last;
					}
				else
					for  ($j=$count; $j<0; $j+=4){
						$html.="</ul>";
						$pointer = array_pop($linestack);
						$last = array_pop($laststack);
					}
				$last_ident = $ident;
			}

			if ($file === false){
				$html .= "<li>".$name."</li>";	
				$record = new DocPage($name,"");
			} else {
				$name =  trim(substr($line, $ind+1));
				$title = $mark->getPageTitle($name);
				$html .= "<li><a href=\"".$name."\">".$title."</a></li>";	
				$record = new DocPage($title, $name);
			}

			$pointer->addChild($record);
			$last = $record;
		}
		$html.="</ul>";

		$mark->set_var("indexStruct", $index);

		if ($last_ident>0)
			for  ($j=0; $j<$last_ident; $j+=4)
				$html.="</ul>";
		return $html;
	}
}
?>