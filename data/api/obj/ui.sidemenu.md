
{{ memo A collapsible side menu that allows selecting separate items. }}

The animated menu component that can be bound to any part of the screen. The size and position of Sidemenu can be customized. It can contain any other views, including complex layouts. Check [sidemenu](desktop/sidemenu.md) documentation for more detailed description.

### Constructor

~~~js
	var sidemenu = webix.ui({
		view:"sidemenu", 
		container:"mydiv", 
		...config options will be here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_sidemenu({
		...config options will be here..
	});
~~~

### Where to start

- [Overview of Sidemenu Widget](desktop/sidemenu.md)
- [Samples](http://docs.webix.com/samples/28_sidemenu/index.html)