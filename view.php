<?php

header("Content-type: text/html; charset=utf-8");

if (!isset($_GET["page"]) && !isset($_GET["edit"]))
	$_GET["page"] = "index.html";


$lang = "";
if (isset($_GET["lang"]))
	$lang = $_GET["lang"];
require_once("./config.php");

if ($lang && !array_key_exists($lang,$config["langAllowed"])){
	header("Location:../".$_GET["page"]);
	die();
}


if ($lang != "" && $config["lang"] == "")
	$config["lang"] = $lang;


if(isset($_GET["page"])){

	require_once("./webixmark.php");

	$page = webixMark::get($_GET["page"], $config);
	echo $page->render();

	require_once "./editor/editor.php";
	$editor = new Editor();
	echo $editor->addListener();

}else{
	require_once "./editor/editor.php";
		$editor = new Editor();
	if(!isset($_GET["action"])){

		echo $editor->render($_GET["edit"], $_GET["lang"]);
	}else{
		if($_POST["linked_value"]){
			$editor->save($_POST["linked_page"], $_POST["linked_value"], false);
		}
		$editor->save($_POST["page"], $_POST["value"]);
	}
}
?>