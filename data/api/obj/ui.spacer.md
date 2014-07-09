
{{memo a borderless empty view}}

The component has a pure API and only used to fill a layout cell if it's supposed to be empty. Can be initialized by simple [] construction. Check [view](desktop/view.md) documentation for more detailed description.

### Constructor

~~~js
	var spacer = webix.ui({
		view:"spacer", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_spacer({
		...config options goes here..
	});
~~~
