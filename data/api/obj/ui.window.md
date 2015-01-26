
{{memo a movable popup window}}

The window consists of the header and body, can be modal or modaless. The window body can contain any content. The header is set by a template.  Check [window](desktop/window.md) documentation for more detailed description.

### Constructor

~~~js
	var window = webix.ui({
		view:"window", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_window({
		...config options goes here..
	});
~~~

### Where to start

- [Overview of Window Widget](desktop/window.md)
- [Samples](http://docs.webix.com/samples/10_window/index.html)