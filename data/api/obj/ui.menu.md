
{{memo a menu of individually selectable items}}

The component can be displayed in 2 modes: static (the menu is fully expanded all the time) and dynamic (only the parent item is static, while its childs are displayed only when the user holds the mouse pointer over the parent). You can configure any nesting level complexity. Check [menu](desktop/menu.md) documentation for more detailed description.

### Constructor

~~~js
	var menu = webix.ui({
		view:"menu", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_menu({
		...config options goes here..
	});
~~~

### Where to start

- [Overview of Menu Widget](desktop/menu.md)
- [Samples](http://docs.webix.com/samples/03_menu/index.html)