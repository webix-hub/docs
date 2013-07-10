<?php 

require_once("config.php");
require_once("webixstruct.php");

function has_problems($fullpath){
	echo $fullpath."\n";
	//rename($fullpath, $fullpath.".unused");
}
function check_files_rec($path, $struct, $parent = false){
	global $config;
	$dir = dir($path);
	while (FALSE !== ($entry = $dir->read())){
		if ($entry == '.' || $entry == '..' || $entry == "classified")
			continue;

		//ignore localized files
		$chunks = explode(".", $entry);
		$index = count($chunks)-2;
		if ($index >0 && array_key_exists($chunks[$index], $config["langAllowed"])){
			array_splice($chunks, $index, 1);
			$entry = implode(".",$chunks);
		}
//			continue;

		$fullpath = $path.$entry;
		if (is_dir($fullpath)){
			check_files_rec($fullpath."/", $struct, $entry);
		} else{
			if ($parent == "obj" && file_exists($path."../refs/".$entry))
				continue;
			if ($parent == "link" && file_exists($path."../".$entry))
			 	echo "[link & api] ".$fullpath."\n";
			if (!array_key_exists($fullpath, $struct))
				has_problems($fullpath);
		}
	}
	$dir->close();
}

$struct = new webixStruct($config);
$hash = array();
foreach($struct->pages as $k => $v){
	$v = strtolower("./data/".str_replace("__","/",preg_replace("|\.html$|", ".md", $v[0])));
	$hash[$v]=true;
}

echo "<h2>Unused files</h2><br><pre>";
check_files_rec("./data/", $hash);
echo "</pre><hr><br>Done";
?>