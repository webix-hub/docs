<?php
require_once("./docobot.php");

$page = "";
if (isset($_GET["page"]))
	$page = $_GET["page"];


$worker = new DocoBot();

$worker->normalize($page);
$worker->clear_log();

$worker->export($page);
$worker->print_log();
$worker->print_time();

?>