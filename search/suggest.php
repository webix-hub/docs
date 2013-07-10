<?php

require_once('./search/suggests.php');
require('./search/config.php');

if (isset($_GET['preffer']))
	$preffer = $_GET['preffer'];
else 
	$preffer = "";

$suggest = new Suggests($config);
$suggest->driver(new APISuggestDriver());
$suggest->driver(new ArticlesSuggestDriver());
$result = $suggest->suggest($query, $preffer);

echo $result;



?>