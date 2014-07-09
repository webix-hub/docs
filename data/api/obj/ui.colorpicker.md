
{{memo a control for selecting a color from a swatch palette}}

The component handles RGB, HSL, and hex formats and allows setting custom colors blocks. Check [colorpicker](desktop/controls.md#colorpicker) documentation for more detailed description.

### Constructor

~~~js
	var colorpicker = webix.ui({
		view:"colorpicker", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_colorpicker({
		...config options goes here..
	});
~~~
