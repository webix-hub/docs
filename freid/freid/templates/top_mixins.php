<?php
error_reporting(E_ALL ^ E_NOTICE);

ob_start();

$objs = json_decode($_POST['objs'], true);
$name = $_POST['name'];

?>
Mixins
======

{{links

<?php
	for ($i=0; $i<sizeof($objs); $i++)
		echo "- api/refs/".$objs[$i]["name"].".md - ".$objs[$i]["short"]."\n";
?>

}}


@index:

<?php
	for ($i=0; $i<sizeof($objs); $i++)
		echo "- api/refs/".$objs[$i]["name"].".md\n";

$code = ob_get_contents();
file_put_contents("../../../data/api/".$_POST["file"],$code);

?>