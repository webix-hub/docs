Bullet Graph
==============

{{pronote
The widget is available in the **Webix Pro** edition.
}}

##API Reference

- [Methods, properties and events](api/refs/ui.bullet.md)
- [Samples](http://docs.webix.com/samples/60_pro/16_bulletgraph/01_init.html)

##Overview

The Bullet Graph widget presents a more compact version of the desktop/gage.md widget. It is intended for comparing a dynamically changed value displayed by 
a moving horizontal bar to a static value (target) set as a vertical line and relate both to qualitative ranges of performance (e.g. poor, satisfactory, and good). 

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

**Main properties**

- **value** - (number) the initial value of Bullet Graph. It should be set within the range of the *minRange* and *maxRange* parameters' values or equal to one of them.
- **minRange** - (number) the maximum range value of the Bullet Graph scale
- **maxRange** - (number) the maximum range value of the Bullet Graph scale
- **bands** - (array) the set of value and color values for ranges of performance used in the widget. The default set is as follows:
~~~js
	bands:[
		{ value:100, color:"#5be5d6"},
		{ value:80, color:"#fff07e" },
		{ value:60, color:"#fd8b8c" } 
	]	
~~~
- **label** - (string) the text label of the widget
- **placeholder** - (string) additional description for the widget's label or value
- **marker** - (number|false) defines the position of the marker of the target value, *false* by default
- **stroke** (number) - the width of the bullet graph bar. The default value is 8
- **scale** (object) - defines the size of the bullet graph scale. The default value is *scale:{step:10}*

The full list of available configuration properties is given in the [Bullet Graph API](api/refs/ui.bullet.md).

Adjusting Animation Speed
---------------------

You can easily change the default animation speed which is *3000 ms*. For this purpose you need to use the property api/ui.bullet_flowtime_config.md:

~~~js
webix.ui({
    view:"bullet", 
    value:40, 
    flowTime:4000
});
~~~



@edition:pro