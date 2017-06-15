
{{memo a context menu}}

The component presents a pop-up menu that is displayed when the user clicks the right mouse button in the client area. You can configure any nesting level complexity. Check [contextmenu](desktop/contextmenu.md) documentation for more detailed description.

### Constructor

{{snippet 
HTML
}}
~~~html
<!--Right click the area-->
<div id="areaA" style=" background-color:#ffffbb; width:500px; height:300px;"></div>
~~~

{{snippet 
JS
}}
~~~js
var contextmenu = webix.ui({
	view:"contextmenu",
  	data:[
    	{ value:"Translate...", submenu:[ 
      	"English", 
      	"Slavic",
      	"German"
    	]},
    	{ value:"Info" }
  	],
  	master:"areaA"
});

~~~

### Where to start

- [Overview of the ContextMenu Widget](desktop/contextmenu.md)
- [Samples](http://docs.webix.com/samples/03_menu/index.html)

@seolinktop: [widget library](https://webix.com)
@seolink: [javascript context menu](https://webix.com/widget/contextmenu/)