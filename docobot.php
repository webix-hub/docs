<?php

set_time_limit(600);
require_once("webixmark.php");
require_once(dirname(__FILE__)."/config.php");

class DocoBot{
	function __construct($cfg = false){
		global $config;
		if ($cfg)
			$this->config = $cfg;
		else
			$this->config = $config;

		$this->time = microtime(true);
		$this->page = $this->config["startpage"];
		$this->clear_log();

		$this->export_dir = dirname(__FILE__)."/static/";
		$this->temp_dir = dirname(__FILE__)."/temp/";
	}


	function copydir($source, $target){
		@mkdir($target);
		$directory = dir($source);
		while (FALSE !== ($readdirectory = $directory->read())){
			if ($readdirectory == '.' || $readdirectory == '..'){
				continue;
			}
			$PathDir = $source.'/'.$readdirectory;
			if (is_dir($PathDir))
				$this->copydir($PathDir, $target.'/'.$readdirectory);
			else
				copy($PathDir, $target.'/'.$readdirectory);
		}

		$directory->close();
	}

	function chm($page = ""){
		if ($page == "")
			$page = $this->page;

		$temp = $this->export_dir;
		$this->export_dir = $this->temp_dir;
		$this->export($page, "chm.html");
		$this->export_dir = $temp;


		$struct = webixStruct::get($this->config);

		$this->chm_save_index($struct);
		$this->chm_save_keys($struct);
		$this->chm_compile($this->config, $struct);
	}
	function chm_save_index_level($struct, $line, &$data){
		foreach ($line as $k => $v){
			$data[]='<LI><OBJECT type="text/sitemap"><param name="Name" value="'.$struct->getTitle($v).'"><param name="Local" value="'.$struct->getURL($v).'"></OBJECT>';
			$child = $struct->getChildLine($v);
			if ($child === null)
				continue;
			$data[]="<UL>";
			$this->chm_save_index_level($struct, $child, $data);
			$data[]="</UL>";
		}
	}
	function chm_save_index($struct){
		$hhc = '<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN"><HTML><HEAD><meta name="GENERATOR" content="Microsoft&reg; HTML Help Workshop 4.1"><!-- Sitemap 1.0 --></HEAD><BODY><UL>';

		$data = array();
		$child = $struct->getChildLine($struct->getTop());
		$this->chm_save_index_level($struct, $child, $data);
		
		$hhc.=implode("\n", $data);
		$hhc.="</UL></BODY></HTML>";
		file_put_contents($this->temp_dir."chm.hhc", $hhc);
	}
	function chm_save_keys($struct){
		$hhk = '<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN"><HTML><HEAD><meta name="GENERATOR" content="Microsoft&reg; HTML Help Workshop 4.1"><!-- Sitemap 1.0 --></HEAD><BODY><UL>';
		foreach($struct->index as $k => $v){
			foreach ($v as $value){
				$hhk .= '<LI> <OBJECT type="text/sitemap">';
				$hhk .= '<param name="Name" value="'.$k.'">';
				$hhk .= '<param name="Local" value="'.$struct->pages[$value][0].'">';
				$hhk .= '</OBJECT>';
			}
		}

		foreach($struct->pages as $k => $v){
			$hhk .= '<LI> <OBJECT type="text/sitemap">';
			$hhk .= '<param name="Name" value="'.$v[1].'">';
			$hhk .= '<param name="Local" value="'.$v[0].'">';
			$hhk .= '</OBJECT>';
		}

		file_put_contents($this->temp_dir."chm.hhk", $hhk);
	}
	function chm_add_dir($dir, &$filelist){
		$d = opendir($this->temp_dir.$dir);
		while(($file = readdir($d))) {
			if ($file == '.' || $file == '..')
				continue;
			$filelist[] = $dir."/".$file;
		}
		closedir($d);
	}
	function chm_compile($config, $struct){
		$filelist = array();
		foreach ($struct->pages as $k => $v)
			$filelist[]=$v[0];
		$this->chm_add_dir("assets", $filelist);
		$this->chm_add_dir("media", $filelist);

		$hhp = "[OPTIONS]\nBinary TOC=Yes\nCompatibility=1.1 or later\nCompiled file=".$config["chmname"].".chm\nContents file=chm.hhc\nIndex file=chm.hhk\nDefault topic=".$config["startpage"]."\nEnhanced decompilation=Yes\nFull-text search=Yes\nLanguage=0x409 English (United States)\nTitle=".$config["chmtitle"]."\n\n[FILES]\n".implode("\n", $filelist);


		file_put_contents($this->temp_dir."chm.hhp", $hhp);

		chdir($this->temp_dir);

		exec("..\\bin\\hhc.exe chm.hhp");
		unlink("chm.hhk");
		unlink("chm.hhc");
		unlink("chm.hhp");

		chdir("..");
	}

    function lint_scan($page = ""){
        if ($page == "")
            $page = $this->page;

        ob_start();

        $mark= webixMark::get($page, $this->config);
        if (file_exists("sample_with_dots.txt"))
            unlink("sample_with_dots.txt");
        $mark->forEachPageA(array($this, "examples"));
        unlink("lint_temp.js");

    }

	function export($page = "", $layout = ""){
		if ($page == "")
			$page = $this->page;

		$this->copydir("./assets", $this->export_dir."assets");
		$this->copydir("./media", $this->export_dir."media");

		ob_start();

		$mark = webixMark::get($page, $this->config);
		if ($layout != "")
			$mark->setLayout($layout);
		$mark->forEachPageA(array($this, "export_mark"));
		$this->log = ob_get_clean();

		if ($layout == ""){
			copy("./search/search.php",$this->export_dir."search.php");
			copy("./search/opensearch.xml",$this->export_dir."opensearch.xml");
			copy("./search/suggest.php",$this->export_dir."suggest.php");

			$this->copydir("./search/search", $this->export_dir."search");
			unlink($this->export_dir."search/config.php");
			copy($this->export_dir."search/config.static", $this->export_dir."search/config.php");
			copy("./template/search.html", $this->export_dir."search/search.html");
			copy("./template/search_layout.html", $this->export_dir."search/search_layout.html");

			@mkdir($this->export_dir."search/cache", 0777);
			
			// generates search indexes
			chdir('./search/indexes/');
			require_once('indexer.php');
			chdir('../../');
			
		}

		@ob_end_clean();


	}

    function examples($mark){
        if ($mark === false) return;
        $ex = $mark->get_section("example?");
        if ($ex != ""){
            if ($this->is_dots_exists($ex,$mark))
                return;

            file_put_contents("lint_temp.js",$ex);
            $this->run_jsl("lint_temp.js",$mark);
            return;
        }
        $data = $mark->get_section("data");
        if (preg_match("/~~~js/i", $data)){
            if ($this->is_dots_exists($data,$mark))
                return;
            $a = preg_split('/~~~js/', $data);
            for ( $i=1; $i < count($a);$i++){
                $a[$i-1] = explode('~~~',$a[$i]);
            }
            $ex = "";
            for ( $i=1; $i < count($a);$i++){
                $ex .= $a[$i][0];
            }

            file_put_contents("lint_temp.js",$ex);
            $this->run_jsl("lint_temp.js",$mark);
        }

    }

    function is_dots_exists($text,$mark){
        if (preg_match("/\.\.\./",$text)){
            $to_file = $mark->name."\r\n";
            file_put_contents("sample_with_dots.txt",$to_file,FILE_APPEND);
            return true;
        }
        return false;
    }

    function run_jsl($path,$mark){
        $data = array();
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            exec("..\\lint\\jsl\\jsl.exe -conf ..\\lint\\jsl\\jsl.conf -process ".$path, $data);
        }
        else{
            exec("jsl -process ".$path, $data);
        }
        $text = implode($data,"\n");
        $text = str_replace("lint_temp.js",$mark->name,$text);
        $text = str_replace("/lint/","/docs/data/",$text);
        if (strpos($text, "\n0 error(s), 0 warning(s)") === false){
            if (preg_match("/extra comma is not recommended in array initializers/",$text) ||
                preg_match("/trailing comma is not legal/",$text) || preg_match("/SyntaxError/",$text))
                echo "<pre style='color:red'>".$text."</pre>";
            else
                echo "<pre style='color:green'>".$text."</pre>";
        }
    }

	function export_mark($mark, $details, $ind, $parent){
		//ignore sections
		if ($mark === false) return;

		echo "- ".$mark->url."\n";
	 
		$text = $mark->render();
		file_put_contents($this->export_dir.$mark->url, $text);
	}
	function validate($page = ""){

		if ($page == "")
			$page = $this->page;

		ob_start();
		$mark = webixMark::get($page, $this->config);
		$mark->forEachPageA(array($this, "validate_mark"));
		$this->log = ob_get_clean();
		@ob_end_clean();
	}
	function validate_error($mark, $message, $details){
		echo "<a href='$mark->url' target='blank'>".$details->name."</a>\n";
		echo "<div class='error'>$message</div>";
	}
	function validate_mark($mark, $details, $ind, $parent){
		if ($mark === false) return;

		if (preg_match("|@[a-z]+[ \n\r\t]+?|", $mark->data))
			$this->validate_error($mark, "Invalid section", $details);

		//Too common problem, disabling
		// if ($mark->get_var("keyword?")=="")
		// 	echo "<div class='warning'>Keywords not defined</div>";
		if (!$mark->has_file())
			$this->validate_error($mark, "Missed file: ($mark->name)", $details);

		if (sizeof($mark->errors)){
			$this->validate_error($mark, "<pre class='error'>".implode("\n", $mark->errors)."</pre>", $details);
		}

		if ($mark->name != strtolower($mark->name))
			$this->validate_error($mark, "Invalid Case in Index", $details);
		
		$pages = array();
		$struct = webixStruct::get($this->config);
		preg_match_all("#<a href=\"([^\"]+)\">([^<]+)#", $mark->get_var("data"), $pages);
		for ($i=0; $i<sizeof($pages[0]); $i++){
			$page = $pages[1][$i];

			if (strpos($page, ".html") === false) continue;
			if (strpos($page, "/samples/index.") !== false) continue;
			if (strpos($page, "http://") !== false) continue;

			$end = strpos($page, "#");
			if ($end !== false)
				$page = substr($page, 0, $end);

			$pagefile = str_replace("__","/",preg_replace("|\\.html$|", ".md", $page));
			
			if (!file_exists("./data/".$pagefile))
				$this->validate_error($mark, "Broken link: ".$pagefile." (".$pages[2][$i].")", $details);
			else
				if (!$struct->isExists(strtolower($page)))
					$this->validate_error($mark, "Not indexed: ".$pagefile." (".$pages[2][$i].")", $details);

			if ($page != strtolower($page))
				$this->validate_error($mark, "Invalid Case in Page Link: ".$pagefile." (".$pages[2][$i].")", $details);
		}

		$todo = $mark->get_var("todo?");
		if ($todo)
			echo $todo;
	}
	function normalize($page = ""){ 
		if ($page == "")
			$page = $this->page;

		$this->structure = array(
			"pages" => array(),
			"index" => array(),
			"navs" => array(),
			"sections" => array()
		);
		
		ob_start();
		$mark = webixMark::get($page, $this->config);
		$mark->forEachPageA(array($this, "normalize_mark"));
		$this->log = ob_get_clean();
		@ob_end_clean();

		file_put_contents($this->temp_dir."__${page}.pxt", serialize($this->structure));
	}

	function normalize_mark($mark, $details, $ind, $parent){
		if ($mark === false) return;
		echo "<a href='$mark->url' target='blank'>".$details->name."</a>\n";


		if (array_key_exists($mark->id, $this->structure["pages"])){
			echo "<div class='error'>Dupplicate page</div>";
			echo "<pre>";
			$old = $this->structure["pages"][$mark->id];
			$new = array($mark->url, $details->name, $parent->id);
			$old[2] = $this->structure["pages"][$old[2]][0];
			$new[2] = $this->structure["pages"][$new[2]][0];
			print_r($old);
			print_r($new);
			echo "</pre>";
			return -1;
			//die();
		}
		//store information for js indexes
		if ($parent)
			$this->structure["pages"][$mark->id] = array($mark->url, $details->name, $parent->id);
		else
			$this->structure["pages"][$mark->id] = array($mark->url, $this->config['name'], 0);

		//keywords
		$keys = $mark->get_var("keyword?");
		if ($keys){
			$keys = explode(",", $keys);
			foreach ($keys as $key){
				$key = trim($key);
				if (!array_key_exists($key, $this->structure["index"]))
					$this->structure["index"][$key] = array();
				$this->structure["index"][$key][] = $mark->id;
			}
		}
		//navigations
		if ($parent !== false){
			if (!array_key_exists($parent->id, $this->structure["navs"]))
				$this->structure["navs"][$parent->id] = array();
			
			$this->structure["navs"][$parent->id][] = $mark->id;
		}
			
		$subsections = $mark->getSections();
		if ($subsections !== null)
			$this->structure["sections"][$mark->id] = $subsections;
	}


	function print_log(){
		$this->generate_css();
		echo "<pre>".$this->log."</pre>";
	}
	function clear_log(){
		$this->log="";
	}
	function print_time(){
		echo "<div class='done'>Done in ".$this->get_total_time()."</div>";
	}
	function get_total_time(){
		$end = microtime(true);
		return floor(($end-$this->time)*1000)."ms";
	}

	private $styles_added = false;
	function generate_css(){
		if ($this->styles_added)
			return;

		$this->styles_added = true;
		echo "
<style>
	pre{
		font-family: Consolas, monospace;
	}
	.done{
		margin-top:40px;
		font-size:12px;
	}
	body{
		font-family:tahoma; font-size:14px;
	}
	a{
		text-decoration:none;
	}
	.error{
		color:red; font-weight:bold; margin-left:20px;
	}
	.warning{
		color:orange; font-weight:bold; margin-left:20px;
	}
</style>
<link rel='stylesheet' href='./assets/docs.css'>
";
	}	
}

?>