
{{memo an editable combo box}}

The control combines an editable text field with a drop-down list of predefined values. Provides autocomplete feature that suggests possible matches while a user types in the text field. Check [combo](desktop/controls.md#combo) documentation for more detailed description.

### Constructor

~~~js
	var combo = webix.ui({
		view:"combo", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_combo({
		...config options goes here..
	});
~~~
