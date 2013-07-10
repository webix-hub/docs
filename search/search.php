<?php

require_once("./search/searcher.php");
require('./search/config.php');

$query = isset($_GET['query']) ? urldecode($_GET['query']) : false;

if (isset($_GET["url"])){
	//redirecting from bad url
	$query = urldecode($_GET["url"]);
	$inpos = strrpos($query, "/");
	if ($inpos !== false)
		$query = substr($query, $inpos+1);
	$query = str_replace(".html", "", str_replace("_", " ", $query));
}

$config['search_word'] = $query;

$s = new Search($config);
$content = $s->render();
echo $content;

?>