<?php

require_once('./indexer_items.php');

class Indexer {

	public function index($type, $filename) {
		$classname = ucfirst(strtolower($type))."Item";
		if (!class_exists($classname)) die("Class {$classname} doesn't exist.");

		require('../../config.php');
		$item = (new $classname);
		$items = $classname::items($config);

		$file = fopen($filename, "w");
		$item->xmlpipe2_start($file);
		for ($i = 0; $i < count($items); $i++) {
			$items[$i]->index($config);
			$items[$i]->save($file, $i + 1);
		}
		$item->xmlpipe2_end($file);
		fclose($file);
	}

}

$ind = new Indexer();

@mkdir("../../temp/sphinx");
@mkdir("../../temp/sphinx/data");

$ind->index("page", "../../temp/sphinx/data/page.xml");
$ind->index("api", "../../temp/sphinx/data/api.xml");
$ind->index("sample", "../../temp/sphinx/data/sample.xml");

copy('./webix.conf', '../../temp/sphinx/webix.conf');
copy('./webix_index.bat', '../../temp/sphinx/webix_index.bat');
copy('./webix_search.bat', '../../temp/sphinx/webix_search.bat');

echo "Indexes - Done<br/>";

require("./autocomplete.php");

?>