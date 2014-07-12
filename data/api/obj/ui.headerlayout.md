
{{memo a horizontal or vertical layout with the header(s)}}

The component consists of cells arranged vertically or horizontally. The header is an optional part of the cell, i.e. in one and the same layout some cells can be with headers, some cells - without. By clicking on the header the user can collapse/expand the related cell. Check [layout](desktop/layout.md) documentation for more detailed description.

### Constructor

~~~js
	var headerlayout = webix.ui({
		view:"headerlayout", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_headerlayout({
		...config options goes here..
	});
~~~
