
{{memo a movable layout component that can contain other components inside}}

Portlet can contain any content and be dragged to any position. It allows placing several components on the page at once. 
Check [portlet](desktop/portlet.md) documentation for more detailed description.

### Constructor

~~~js
	var portlet = webix.ui({
		view:"portlet", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_portlet({
		...config options goes here..
	});
~~~

### Where to start

- [Overview of Portlet Widget](desktop/portlet.md)
- [Samples](http://docs.webix.com/samples/60_pro/09_portlet/index.html)