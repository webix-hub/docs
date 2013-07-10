{{memo a base class for layout-based UI components}}

The component serves as the base class that defines properties, methods, and events common for all layout-based components. Not intended for direct use. If you need to create a layout, please use (ui.layout)[api/refs/ui.layout.md] or its descendants. 

### Constructor

~~~js
	var baselayout = webix.ui({
		view:"baselayout", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_baselayout({
		...config options goes here..
	});
~~~
