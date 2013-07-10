
{{memo a container control that keeps a set of views and displays one view at a time }}

The component allows you to divide the page content into multiple groups and display a specific view based on some criteria. Often used in combination with a clickable control to implement tabbar. Check [multiview](desktop__multiview.md) documentation for more detailed description.

### Constructor

~~~js
	var multiview = webix.ui({
		view:"multiview", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_multiview({
		...config options goes here..
	});
~~~
