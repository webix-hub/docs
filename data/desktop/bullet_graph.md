Bullet Graph
==============

##API Reference

- [Methods, properties and events](api/refs/ui.bullet.md)
- [Samples](http://docs.webix.com/samples/60_pro/08_barcode/index.html)

##Overview

The BulletGraph widget presents a combination of a Gage and a progress bar. It is intended for comparing a dynamically changed value displayed by a moving horizontal bar 
to a static value (target) set as a vertical line and relate both to qualitative ranges of performance (e.g. poor, satisfactory, and good). 

<br>
<img style="display:block; margin-left:auto;margin-right:auto;" src="desktop/bulletgraph_front.png">

Basic Initialization
--------------------

Firstly, create a new HTML file and include the related Webix code files in it.

Required code files are:

- webix.css
- webix.js

{{snippet
A basic HTML page with the included code files
}}

~~~html
<!DOCTYPE html>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Bullet Graph</title>
   <script src="../codebase/webix.js" type="text/javascript" charset="utf-8"></script>
   <link rel="stylesheet" href="../codebase/webix.css" type="text/css" charset="utf-8">
</head>
<body>
    <script>
        // here you will place your JavaScript code
    </script>
</body>
</html>
~~~

Now you can move on to the widget's initialization. A basic configuration for Bullet Graph initialization is given below:

~~~js
webix.ui({
	view:"bullet", 
    id:"b1",
	minRange:0, 
	maxRange:120,
	value:40, 
	bands:[
		{ value:120, color:"#b4e5fb"},
		{ value:80, color:"#55c2f3"},
		{ value:60, color:"#1997dc"},
	], 
	label:"2015 YTD", 
	placeholder:"expected #value#", 
	marker:70, 
	stroke: 8, 
	scale: { 
		step:20,
		template:"#value#%"
	}
});
~~~

{{sample
60_pro/16_bulletgraph/01_init.html
}}











@edition:pro