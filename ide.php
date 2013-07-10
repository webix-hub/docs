<?php

require_once("./ide/ide.php");
$output = "./temp/ide/";
$component = "ui.datatable";

if (!file_exists($output))
	mkdir($output);

$ide = new IDE();

require_once("./ide/sdocml.php");
$driver = new sdocmlDriver();
$result = $ide->get($driver, $component);
file_put_contents("{$output}datatable.sdocml", $result);

require_once("./ide/sdoc.php");
$driver = new sdocDriver();
$result = $ide->get($driver, $component);
file_put_contents("{$output}datatable.sdoc.js", $result);

require_once("./ide/vsdoc.php");
$driver = new vsdocDriver();
$result = $ide->get($driver, $component);
file_put_contents("{$output}datatable.vsdoc.js", $result);

require_once("./ide/dreamweaver.php");
$driver = new dreamweaverDriver();
$result = $ide->get($driver, $component);
file_put_contents("{$output}datatable.xml", $result);

echo "Done";

?>