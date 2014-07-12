
{{memo a wrapper which renders an HTML fieldset}}

The control presents a standard fieldset that combines several sense-connected UI elements inside itself. Check [fieldset](desktop/controls.md#fieldset) documentation for more detailed description.

### Constructor

~~~js
	var fieldset = webix.ui({
		view:"fieldset", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_fieldset({
		...config options goes here..
	});
~~~
