<?php


$configs = array();
$configs["export-live"] = array(
	"sample_path"		=>		dirname(__FILE__)."/../../samples/",
	"sample_http"		=> 		"/samples/",
	"startpage"			=>		"index.html",
	"version" 			=> 		"1.0",
	"name"				=>		"Webix",
	"chmname"			=>		"webix",
	"chmtitle"			=>		"Webix, Desktop edition",
	"use-discuss"		=>		false
);

$configs["export-local"] = array(
	"sample_path"		=>		dirname(__FILE__)."/../../samples/",
	"sample_http"		=> 		"/samples/",
	"startpage"			=>		"index.html",
	"version" 			=> 		"1.0",
	"name"				=>		"Webix",
	"chmname"			=>		"webix",
	"chmtitle"			=>		"Webix, Desktop edition",
	"use-discuss"		=>		false
);


$configs["desktop"] = array(
	"sample_path"		=>		dirname(__FILE__)."/../../samples/",
	"sample_http"		=> 		"/webix/samples/",
	"startpage"			=>		"index.html",
	"version" 			=> 		"1.0",
	"name"				=>		"Webix",
	"chmname"			=>		"webix",
	"chmtitle"			=>		"Webix, Desktop edition",
	"use-discuss"		=>		false
);


$configs["classified"] = array(
	"sample_path"		=>		dirname(__FILE__)."/../../samples/",
	"sample_http"		=> 		"/samples/",
	"startpage"			=>		"classified__index.html",
	"version" 			=> 		"1.0",
	"name"				=>		"Webix internals",
	"chmname"			=>		"webix_internals",
	"chmtitle"			=>		"Webix, Internals",
	"use-discuss"		=>		false
);

$configs["api"] = array(
	"sample_path"		=>		dirname(__FILE__)."/../../samples/",
	"sample_http"		=> 		"/samples/",
	"startpage"			=>		"api__toc__ui.html",
	"version" 			=> 		"1.0",
	"name"				=>		"Webix API",
	"chmname"			=>		"webix_api",
	"chmtitle"			=>		"Webix, API",
	"use-discuss"		=>		false
);


$configs["online"] = $configs["export-live"];
$configs["online"]["use-discuss"] = true;


$config_file = dirname(__FILE__)."/.project";
if (file_exists($config_file))
	$config = $configs[file_get_contents($config_file)];
else {
  if (isset($_GET["project"]))
    $config = $configs[$_GET["project"]];
  else
    $config = $configs["desktop"];
}

$config["langAllowed"] = array("ru" => true);
$config["today"]=date("Y-m-d",time());
$config["analytic"] = "<script type=\"text/javascript\">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-41866635-1']);
  _gaq.push(['_setDomainName', 'webix.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>";


$config["discuss"]="<div style='clear:both; height:20px;'></div>
<div id='disqus_thread'></div>
<script type='text/javascript'>
    var disqus_shortname = 'webixdocs';   
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>";


if (!$config["use-discuss"]){
	$config["discuss"] = "";
	$config["analytic"] = "";
}
$config["lang"] = "";

?>