
{{memo a draggable border in a layout }}

The component is used to make some view placed into a layout draggable by a specific border. Draggable borders differs visually from the undraggable. Check [layout](desktop/layout.md) documentation for more detailed description.

### Constructor

~~~js
	var resizer = webix.ui({
		view:"resizer", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_resizer({
		...config options goes here..
	});
~~~
