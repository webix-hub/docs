
{{memo a form that supports an extended set of elements  }}

The component provides validation and the ability to save user input to the backend database. Check [form](desktop__form.md) documentation for more detailed description.

### Constructor

~~~js
	var form = webix.ui({
		view:"form", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_form({
		...config options goes here..
	});
~~~
