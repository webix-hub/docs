<?php

require_once("./webixmark.php");
require_once("./config.php");

header("Content-type:text/javascript");

//use cached version
// if (file_exists("./temp/assert.js")){
// 	echo file_get_contents("./temp/assert.js");
// 	die();
// }

ob_start();

echo "doc={};\n\n";

$client = array(
	"method" => "methods",
	"event"  => "events",
	"config" => "properties",
	"other" => "artefacts"
);

function gen_obj_code($name, $file){
	global $config;

	$mark = webixMark::get("api__obj__".$file, $config);
	echo "if (!doc['webix.${name}']) doc['webix.${name}']={}; doc['webix.$name'].short=".json_encode($mark->get_var("memo1")).";\n\n";
}

function gen_code($c,$m,$t, $file){
	global $client;
	global $config;
	
	//command names can be wrong
	@$ct = $client[$t];
	if ($ct == "") return;

	$stats = array();
	if ($c == "")
		echo "if (!doc['webix']) doc['webix']={}; if (!doc['webix'].${ct}) doc['webix'].${ct}={};\n";
	else
		echo "if (!doc['webix.${c}']) doc['webix.${c}']={}; if (!doc['webix.${c}'].${ct}) doc['webix.${c}'].${ct}={};\n";
	
ob_start();
	$mark = webixMark::get("api__".$file, $config);
	if ($mark->has_var("link"))
		$mark = webixMark::get($mark->get_var("link"), $mark->config);
	
	$stats["short"]=trim($mark->get_var("short!?"));
	$page_m = $mark->get_title();	
	if ($page_m != "") $m = $page_m;


	if (trim($mark->get_var("descr?")) != "")
		$stats["descr"]=1;
	if (trim($mark->get_var("example?")) != "")
		$stats["example"]=1;
				
	if ($t == "config"){
		$stats["type"]=$mark->get_var("type?");
	}
	if ($t == "method"){
		$params = $mark->get_var("params?");
		$stats["params"]=$params["_keys"];
	}
	if ($t == "event"){
		$stats["params"]=$mark->get_var("params!?");
	}
ob_end_clean();

	if ($c == "")
		echo "doc['webix'].${ct}[\"${m}\"]=".json_encode($stats)."\n\n";
	else
		echo "doc['webix.${c}'].${ct}[\"${m}\"]=".json_encode($stats)."\n\n";
}

$source = "./data/api";
$directory = dir($source);
while (FALSE !== ($readdirectory = $directory->read())){
	if ($readdirectory == '.' || $readdirectory == '..'){
		continue;
	}
	$PathDir = $source.'/'.$readdirectory;
	if (is_dir($PathDir)) continue;
	if (strpos($readdirectory, ".md") === false) continue;
	
	$name = explode("_", str_replace(".md", "", $readdirectory));
	
	$component = $name[0];
	$type = $name[sizeof($name)-1];
	if ($type == "event" || $type == "config" || $type == "other"){
		array_pop($name);
	} else {
		$type = "method";
	}
	$method = implode("_", array_splice($name, 1));

	echo gen_code($component, $method, $type, $readdirectory);
}
$directory->close();

//object descriptions
$source = "./data/api/obj";
$directory = dir($source);
while (FALSE !== ($readdirectory = $directory->read())){
	if ($readdirectory == '.' || $readdirectory == '..'){
		continue;
	}
	$PathDir = $source.'/'.$readdirectory;
	if (is_dir($PathDir)) continue;
	if (strpos($readdirectory, ".md") === false) continue;
	
	$name = str_replace(".md", "", $readdirectory);
	
	echo gen_obj_code($name, $readdirectory);
}
$directory->close();

$assert_data = ob_get_clean();

//save cache
file_put_contents("./temp/assert.js", $assert_data);
echo $assert_data;

?>