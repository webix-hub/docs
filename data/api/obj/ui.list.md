
{{memo a regular list of items}}

The component serves as the base class that defines properties, methods, and events common for all list-type controls. Check [list](desktop/list.md) documentation for more detailed description.

### Constructor

~~~js
	var list = webix.ui({
		view:"list", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_list({
		...config options goes here..
	});
~~~

### Where to start

- [Overview of List Widget](desktop/list.md)
- [Samples](http://docs.webix.com/samples/05_list/index.html)