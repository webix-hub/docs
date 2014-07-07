
{{memo a static text that is rendered in the absolutely positioned container}}

Generally, the component isn't intended for direct initialization. But if you decide to use it, use mouse events (onMouseOut, onMouseIn, onMouseMove etc.) to show/hide the tooltip box in the specified position. Check [tooltip](desktop/tooltip.md) documentation for more detailed description.

### Constructor

~~~js
	var tooltip = webix.ui({
		view:"tooltip", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_tooltip({
		...config options goes here..
	});
~~~
