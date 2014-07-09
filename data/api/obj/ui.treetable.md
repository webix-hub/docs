
{{memo a control for presenting tree in a grid cell }}

The component is used to integrate a tree into an editable grid. There is a support for  in-line node editing, drag-and-drop, filtering, checkboxes etc. Check [treetable](desktop/treetable.md) documentation for more detailed description.

### Constructor

~~~js
	var treetable = webix.ui({
		view:"treetable", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_treetable({
		...config options goes here..
	});
~~~
