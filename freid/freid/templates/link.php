<?php
error_reporting(E_ALL ^ E_NOTICE);

if (file_exists("../../../data/api/link/".$_POST["file"]))
	die();

file_put_contents("../../../data/api/link/".$_POST["file"], "@link: api/".$_POST["link"]);


?>