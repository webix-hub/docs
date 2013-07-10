<?php

require_once("config.php");
require_once("webixmark.php");

function each_object($base, $name){
	global $config;
	$dir = dir($base);
	while($file = $dir->read()){
		$namepath = $name."/".$file;
		$path = $base."/".$file;
		if (is_file($path) && strrpos($file, "ui.") === 0){
			$data = file_get_contents($path);
			$name = str_replace(".md", "", str_replace("ui.", "", $file));
			$sample = "

Check \"[$name docs](desktop__$name.md)\" for more detailed component descript

### Constructor

~~~js
	var $name = webix.ui({
		view:\"$name\", 
		container:\"mydiv\", 
		...config options goes here..
	})
	//or, in case of jQuery
	\$(\"#mydiv\").webix_$name({
		...config options goes here..
	});
~~~
";
			file_put_contents($path, $data.$sample);
		}
	}
}


function each_folder($base, $name){
	global $config;
	$dir = dir($base);
	while($file = $dir->read()){
		$namepath = $name."/".$file;
		$path = $base."/".$file;
		if (is_file($path)){
			if (strpos($path, "_event.md") > 0){
				$page = webixMark::get($namepath, $config);
				$code = $page->get_var("example?");
				
				/*rewrite auto-generated code*/
				// if (strpos($code, "//... some code here ... ") > 0 )
				// 	$code = "";

				if ($code == ""){
					$params = $page->get_var("params?");
					if ($params)
						$params = implode(", ", $params["_keys"]);
					
					$return = $page->get_var("returns?");
					if ($return)
						$return ="    //return false to block operation\n    return true;\n";
					else
						$return = "";

					$code = "\nsome.attachEvent(\"".$page->getName()."\", function($params){\n    //... some code here ... \n${return}});";
					echo $code; 
					$page->write_section("example", $code);
					echo $path."\n";
				}
			}
		} else if ($file != ".." && $file != "." && $file != "link"){
			each_folder($path, $namepath);
		}

	}
}

echo "<pre>";
//each_folder("./data/api", "api");
each_object("./data/api/obj", "api/obj");

?>