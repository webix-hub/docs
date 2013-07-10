<?php

require_once('spelling_check_class.php');


$sp = new SpellingCheck();
$sp->loadIgnoreList("ignore.txt");
$sp->setLimit(20);
$sp->setRecoursive(true);

// add words from POST to ignore list
if ((isset($_GET["to_ignore_words"]))&&(isset($_POST["ignore_words"]))) {
	foreach ($_POST["ignore_words"] as $v)
		$sp->addIgnoreWords($v);
	$sp->saveIgnoreList();
}

chdir('../');
require_once('./webixstruct.php');
require_once('./webixmark.php');
require('./config.php');
$struct = webixStruct::get($config);
$pages = $struct->pages;
foreach ($pages as $k => $page) {
	$mark = webixMark::get($page[0], $config);
	$mark->setLayout("onlydata.html");
	$content = $mark->render();
	$result = $sp->checkFile($content, $page[0]);
	if ($result === false) break;
}

echo $sp->reportToHTML();



function link2name($link) {
	$name = str_replace("__", "/", $link);
	$name = str_replace(".html", ".md", $name);
	return $name;
}


?>