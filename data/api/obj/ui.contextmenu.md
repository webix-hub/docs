
{{memo a context menu}}

The component presents a pop-up menu that is displayed when the user clicks the right mouse button in the client area. You can configure any nesting level complexity. Check [contextmenu](desktop/contextmenu.md) documentation for more detailed description.

### Constructor

~~~js
	var contextmenu = webix.ui({
		view:"contextmenu", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_contextmenu({
		...config options goes here..
	});
~~~
