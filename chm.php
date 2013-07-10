<?php

require_once("./docobot.php");

$worker = new DocoBot();

//$worker->normalize();
$worker->clear_log();

$worker->chm();
$worker->print_log();
$worker->print_time();

?>