<?php

require_once('../../webixmark.php');
require('../../config.php');

class AutoCompleteGenerator {

	protected $component;

	public function __construct($component) {
		$this->component = "ui.".$component;
	}

	public function get_words($out) {
		global $config;

		$api = array();

		$struct = webixStruct::get($config);

		$pages = $struct->pages;
		foreach ($pages as $k => $page) {
			if (strpos($page[0], "api__refs__") !== 0) continue;
			$res = preg_match("/api__refs__(.*)_(event|prop|method|other)s.html/", $page[0], $tmp);
			if ($res) continue;
			$component = str_replace("api__refs__", "", $page[0]);
			$component = str_replace(".html", "", $component);
			$this->component = $component;
			$api = array_merge($api, $this->get_abstract('method'));
			$api = array_merge($api, $this->get_abstract('prop'));
			$api = array_merge($api, $this->get_abstract('event'));
		}

		$this->toString($api, $out);
	}

	protected function get_abstract($type = 'method') {
		global $config;

		$pagelink = $this->file2link('api/refs/'.$this->component.'.md');
		if ($this->component === "common_helpers")
			$component = "";
		else {
			$mark = webixMark::get($pagelink, $config);
			$component = $mark->getName();
		}

		$sort = Array(
			"ui.datatable"=>50,
			"ui.datatree" => 40,
			"ui.input" => 30,
			"ui.layout" => 20,
			"ui.view" => 10
		);
		
		$signs = array(
			'method' => 'signMethod',
			'prop' => 'signOption',
			'event' => 'signEvent'
		);
		$filename = "api/refs/{$this->component}_{$type}s.md";
		$link = $this->file2link($filename);
		$mark = webixMark::get($link, $config);
		$mark->setLayout("onlydata.html");

		$items = $mark->index->child;
		$signMethod = new webixSignateFullMethodHandler();
		$signOption = new webixSignateFullOptionHandler();
		$signEvent = new webixSignateFullMethodHandler();
		for ($i = 0; $i < count($items); $i++) {
			$page = webixMark::get($this->file2link($items[$i]->file), $config);
			if ($page->has_var("link")){
				$refer = webixMark::get($page->get_var("link"), $config);
				$page->copy_var($refer);
				$page = $refer;
			}
			$signature = $signs[$type];
			$sign = $$signature->process($page, $component);
			$short = $page->get_var('short', true);
			$name = $this->path2name($items[$i]->file);

			$items[$i] = array(
				'name' => $this->file2link($items[$i]->file),
				'shortkey' => $name,
				'key' => "webix ".str_replace(".", " ", $this->component)." ".$name,
				'component' => $this->component,
				'label' => $sign,
				'short' => $short,
				'type' => $type,
				'sort' => isset($sort[$this->component]) ? $sort[$this->component] : 1
			);
		}
		return $items;
	}

	public function file2link($file) {
		return str_replace("/", "__", str_replace(".md",".html",$file));
	}

	protected function path2name($file) {
		// page url to name
		$name = str_replace("api/", "", $file);
		$name = str_replace("link/", "", $name);
		$tmp = explode("_", $name);
		if (isset($tmp[1])) $name = $tmp[1];
		$name = str_replace(".md", "", $name);
		return $name;
	}

	
	protected function toString($api, $file) {
		$file = fopen($file, "w");
		$this->xmlpipe2_start($file);
		for ($i = 0; $i < count($api); $i++) {
			$this->save($file, $api[$i], $i+1);
		}
		$this->xmlpipe2_end($file);
		fclose($file);
	}
	
	protected function xmlpipe2_start($file) {
		$xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<sphinx:docset>

<sphinx:schema>
		<sphinx:field name=\"key\"/> 
		<sphinx:field name=\"shortkey\"/> 
		<sphinx:attr name=\"sort\" type=\"string\" />
		<sphinx:attr name=\"key\" type=\"string\" />
		<sphinx:attr name=\"name\" type=\"string\" />
		<sphinx:attr name=\"component\" type=\"string\" />
		<sphinx:attr name=\"label\" type=\"string\" />
		<sphinx:attr name=\"short\" type=\"string\" />
		<sphinx:attr name=\"type\" type=\"string\" />
	</sphinx:schema>";
		fwrite($file, $xml);
	}
	
	protected function xmlpipe2_end($file) {
		$xml = "
<sphinx:killlist></sphinx:killlist>
</sphinx:docset>";
		fwrite($file, $xml);
	}

	protected function save($file, $data, $index) {
		$fields = array();
		$values = array();
		$item = "<sphinx:document id=\"{$index}\">";
		foreach ($data as $key => $value) {
			$item .= "<{$key}><![CDATA[{$value}]]></{$key}>\n\t\t\t";
		}
		$item .= "</sphinx:document>";
		fwrite($file, $item);
	}
}


class webixSignateFullOptionHandler{
	function process($mark, $component){
		$type = $mark->get_var("type?");
		$name = $mark->getName();

		if (!empty($component)) $component .= ".";

		$newsig = "<em>".str_replace(",","|",$type)."</em> ".$component."<b>".$name."</b>;";
		return "<div class='webixdoc_sign'>".$newsig."</div>";
	}
}


class webixSignateFullMethodHandler{
	function process($mark, $component){
		$index = $mark->get_var("params?");
		$return = $mark->get_var("returns?");

        if (is_string($return))
            $return = array();
		if (!isset($return['type']))
			$return['type'] = "";
		
		$name = $mark->getName();

		$newsig = "";
		if ($return == "")
			$newsig .= "<em>void</em> ";
		else 
			$newsig .= "<em>".(is_string($return['type']) ? $return['type'] : implode("|",$return['type']))."</em> ";

		if (!empty($component)) $component .= ".";
		$newsig.=" ".$component."<b>".$name."</b>(";
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
				$newsig .= "<em>".($index[$key]["type"]!=null ? implode("|",$index[$key]["type"]) : "")."</em> <b>".$key."</b>";
			}
		
		if ($optional) 
			$newsig .="] ";
		$newsig.="){ ... };";
			
		return "<div class='webixdoc_sign'>".$newsig."</div>";
	}
}


class webixSignateFullEventHandler{
	function process($mark, $component){
		$index = $mark->get_var("params?");
		$return = $mark->get_var("returns?");
		$name = $mark->getName();

		$newsig = "";
		if ($return == "")
			$newsig .= "<em>void</em> ";
		else 
			$newsig .= "<em>".implode("|",$return['type'])."</em> ";

		if (!empty($component)) $component .= ".";
		$newsig.=" ".$component."<b>".$name."</b>(";
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

$output = '../../temp/sphinx/data/autocomplete.xml';

$ac = new AutoCompleteGenerator("datatable");
$ac->get_words($output);
echo "Autocomplete - Done";

?>