<?php
error_reporting(E_ALL ^ E_NOTICE);

ob_start();

$objs = json_decode($_POST['objs'], true);
$helpers = json_decode($_POST['helpers'], true);

$name = $_POST['name'];
if ($name == "ui"){
	@ob_end_clean();
	require("desktop_top.php");
	die();
}

?>
API Reference
=============

$$name
------

{{links
- api/refs/<?php echo $name; ?>.md - <?php echo $_POST["short"]; ?>
}}


Helpers
-------

{{links
- api/refs/common_helpers.md - helpers implemented in webix. and webix.ui
<?php 
	for ($i=0; $i<sizeof($helpers); $i++)
			echo "- api/refs/".$helpers[$i]["name"].".md - ".$helpers[$i]["short"]."\n";
?>
}}

Other components
----------------

{{links

<?php
	for ($i=0; $i<sizeof($objs); $i++)
		if ($name != $objs[$i]["name"])
			echo "- api/refs/".$objs[$i]["name"].".md - ".$objs[$i]["short"]."\n";
?>

- api/<?php echo str_replace(".md","",$_POST["file"]); ?>_mixins.md - building blocks for existing and new components
}}

@index:

- api/refs/<?php echo $name; ?>.md

- api/refs/common_helpers.md
<?php 
	for ($i=0; $i<sizeof($helpers); $i++)
			echo "- api/refs/".$helpers[$i]["name"].".md\n";
	for ($i=0; $i<sizeof($objs); $i++)
		if ($name != $objs[$i]["name"])
			echo "- api/refs/".$objs[$i]["name"].".md\n";
?>

- api/<?php echo str_replace(".md","",$_POST["file"]); ?>_mixins.md



<?php
$code = ob_get_contents();
file_put_contents("../../../data/api/".$_POST["file"],$code);

?>