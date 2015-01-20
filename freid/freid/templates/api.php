<?php
error_reporting(E_ALL ^ E_NOTICE);

$methods = json_decode($_POST['methods'], true);
$configs = json_decode($_POST['configs'], true);
$events = json_decode($_POST['events'], true);
$based = json_decode($_POST['based'], true);
$others = json_decode($_POST['others'], true);
$templates = json_decode($_POST['templates'], true);

$name = $_POST['name'];
$filename = strtolower( str_replace(" ", "_", $name) );
$file = $_POST['file'];
$objfile = "../../../data/api/obj/".strtolower($filename).".md";
if (!file_exists($objfile)){
	$start = "\ndummy stub\n\n{{todo replace with real description }}\n";
	file_put_contents($objfile, $start);
} else 
	$start = file_get_contents($objfile);
	

function my_uppercase($data){
	return "{{memo ".strtoupper($data[1]);
}
$start = preg_replace_callback("|\\{\\{memo[ ]+([a-z])|","my_uppercase", $start);
$start = preg_replace("|[ ]*\\}\\}|",". }}", $start);


ob_start();

?>
<?php echo $name; ?> 
=============

<?php echo $start; ?>

<?php if (sizeof($based)){ ?>
<div class='webixdoc_parents'><span>Based on: </span>
<?php 
	$based = array_values(array_unique($based));
	for ($i=0; $i<sizeof($based); $i++){
		$parentname = str_replace("webix.","",$based[$i]);
		$url = strtolower($parentname);
		if  ($i!=0) echo ", ";
		echo "<a href=\"api/refs/${url}.md\">$parentname</a>";
	}
?>
</div>
<?php } ?>

<?php if (sizeof($methods)){ ?>

<div class='h2'>Methods</div>

{{api
<?php
	for ($i=0; $i<sizeof($methods); $i++)
		echo "- api/".$methods[$i]["owner"]."_".strtolower($methods[$i]["name"]).".md - ".$methods[$i]["descr"]."\r\n";
?>
}}

<?php } ?>
<?php if (sizeof($events)){ ?>

<div class='h2'>Events</div>


{{api
<?php
	for ($i=0; $i<sizeof($events); $i++)
		echo "- api/".$events[$i]["owner"]."_".strtolower($events[$i]["name"])."_event.md - ".$events[$i]["descr"]."\r\n";
?>
}}

<?php } ?>
<?php if (sizeof($configs)){ ?>

<div class='h2'>Properties</div>

{{api
<?php
	for ($i=0; $i<sizeof($configs); $i++)
		echo "- api/".$configs[$i]["owner"]."_".strtolower($configs[$i]["name"])."_config.md - ".$configs[$i]["descr"]."\r\n";
?>
}}

<?php } ?>

<?php if (sizeof($templates)){ ?>

<div class='h2'>Templates</div>

{{api
<?php
	for ($i=0; $i<sizeof($templates); $i++)
		echo "- api/".$templates[$i]["owner"]."_".strtolower($templates[$i]["name"])."_template.md - ".$templates[$i]["descr"]."\r\n";
?>
}}

<?php } ?>


<?php if (sizeof($others)){ ?>

<div class='h2'>Other</div>


{{api
<?php
	for ($i=0; $i<sizeof($others); $i++)
		echo "- api/".$others[$i]["owner"]."_".strtolower($others[$i]["name"])."_other.md - ".$others[$i]["descr"]."\r\n";
?>
}}

<?php } ?>

@index:
<?php 
if (sizeof($methods)){ ?>
- api/refs/<?php echo $filename; ?>_methods.md
<?php } ?>
<?php if (sizeof($configs)){ ?>
- api/refs/<?php echo $filename; ?>_props.md
<?php } ?>
<?php if (sizeof($events)){ ?>
- api/refs/<?php echo $filename; ?>_events.md
<?php } ?>
<?php if (sizeof($templates)){ ?>
- api/refs/<?php echo $filename; ?>_templates.md
<?php } ?>
<?php if (sizeof($others)){ ?>
- api/refs/<?php echo $filename; ?>_others.md
<?php } ?>

<?php 

$code = ob_get_clean(); ob_start();
file_put_contents("../../../data/api/refs/".$filename.".md",$code);


?>
Methods
=======

{{api
<?php
	for ($i=0; $i<sizeof($methods); $i++)
		echo "- api/".$methods[$i]["owner"]."_".strtolower($methods[$i]["name"]).".md - ".$methods[$i]["descr"]."\r\n";
?>
}}

@index:
<?php
	for ($i=0; $i<sizeof($methods); $i++)
		echo "- api/".$methods[$i]["owner"]."_".strtolower($methods[$i]["name"]).".md\r\n";
?>


<?php 

$code = ob_get_clean(); ob_start();
if (sizeof($methods))
	file_put_contents("../../../data/api/refs/".$file."_methods.md",$code);

?>
Events
=======

{{api
<?php
	for ($i=0; $i<sizeof($events); $i++)
		echo "- api/".$events[$i]["owner"]."_".strtolower($events[$i]["name"])."_event.md - ".$events[$i]["descr"]."\r\n";
?>
}}

@index:
<?php
	for ($i=0; $i<sizeof($events); $i++)
		echo "- api/".$events[$i]["owner"]."_".strtolower($events[$i]["name"])."_event.md\n";
?>


<?php 

$code = ob_get_clean(); ob_start();
if (sizeof($events))
	file_put_contents("../../../data/api/refs/".$file."_events.md",$code);

?>
Properties
==========

{{api
<?php
	for ($i=0; $i<sizeof($configs); $i++)
		echo "- api/".$configs[$i]["owner"]."_".strtolower($configs[$i]["name"])."_config.md - ".$configs[$i]["descr"]."\r\n";
?>
}}

@index:
<?php
	for ($i=0; $i<sizeof($configs); $i++)
		echo "- api/".$configs[$i]["owner"]."_".strtolower($configs[$i]["name"])."_config.md\r\n";
?>

<?php 
$code = ob_get_clean(); ob_start();
if (sizeof($configs))
	file_put_contents("../../../data/api/refs/".$filename."_props.md",$code);

?>
Others
=======

{{api
<?php
	for ($i=0; $i<sizeof($others); $i++)
		echo "- api/".$others[$i]["owner"]."_".strtolower($others[$i]["name"])."_other.md - ".$others[$i]["descr"]."\r\n";
?>
}}

@index:
<?php
	for ($i=0; $i<sizeof($others); $i++)
		echo "- api/".$others[$i]["owner"]."_".strtolower($others[$i]["name"])."_other.md\r\n";
?>


<?php 

$code = ob_get_clean(); ob_start();
if (sizeof($others))
	file_put_contents("../../../data/api/refs/".$filename."_others.md",$code);

?>
Templates
=======

{{api
<?php
	for ($i=0; $i<sizeof($templates); $i++)
		echo "- api/".$templates[$i]["owner"]."_".strtolower($templates[$i]["name"])."_template.md - ".$templates[$i]["descr"]."\r\n";
?>
}}

@index:
<?php
	for ($i=0; $i<sizeof($templates); $i++)
		echo "- api/".$templates[$i]["owner"]."_".strtolower($templates[$i]["name"])."_template.md\r\n";
?>


<?php 

$code = ob_get_clean(); ob_start();
if (sizeof($templates))
	file_put_contents("../../../data/api/refs/".$filename."_templates.md",$code);

?>