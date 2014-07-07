
{{memo horizontal slider for choosing numeric values from a range of predefined ones}}

The control allows changing numeric data by dragging a marker over a line, with a defined step (optionally). Check [slider](desktop/controls.md#slider) documentation for more detailed description.

### Constructor

~~~js
	var slider = webix.ui({
		view:"slider", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_slider({
		...config options goes here..
	});
~~~