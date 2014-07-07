
{{memo  a control for integration with an HTML form}}

The component allows you to get an HTML Form as a lib-based view, so that to use it together with the other lib components (common API, techniques, architecture etc.). Check [htmlform](desktop/htmlform.md) documentation for more detailed description.

### Constructor

~~~js
	var htmlform = webix.ui({
		view:"htmlform", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_htmlform({
		...config options goes here..
	});
~~~
