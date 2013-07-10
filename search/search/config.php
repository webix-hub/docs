<?php

$query = isset($_GET['query']) ? urldecode($_GET['query']) : '';

$config = array(
	'host' => '192.168.3.251',
	'port' => 9312,
	'search_base' => './',
	'docdir' => '../static',
	'docurl' => './',
	'cachedir' => 'search/cache',
	'template_dir' => '../template/',
	'sampleurl' => '/samples/',
	'articles_number' => 5,
	'api_number' => 3,
	'samples_number' => 3,
	'search_word' => $query,
	'suggests_limit' => 5,
	'api_suggests' => 'api_words.txt',
	'without_cache' => true
);


?>