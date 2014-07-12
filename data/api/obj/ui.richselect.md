
{{memo a non-editable combo box}}

The control combines a non-editable text field with a drop-down list of predefined values.  Check [richselect](desktop/controls.md#richselect) documentation for more detailed description.

### Constructor

~~~js
	var richselect = webix.ui({
		view:"richselect", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_richselect({
		...config options goes here..
	});
~~~
