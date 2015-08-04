
{{memo a spin box, aka an up-down control}}

The control allows users to precisely change numeric data. It provides up/down buttons that increment or decrement the value with a predefined step. Check [counter](desktop/counter.md) documentation for more detailed description.

### Constructor

~~~js
	var counter = webix.ui({
		view:"counter", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_counter({
		...config options goes here..
	});
~~~
