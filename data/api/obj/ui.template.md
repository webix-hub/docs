{{memo a view with some HTML content inside}}

The component is a simple container (but with rich API support) where you can put any HTML content. Check [template](desktop/template.md) documentation for more detailed description.

### Constructor

~~~js
	var template = webix.ui({
		view:"template", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_template({
		...config options goes here..
	});
~~~
