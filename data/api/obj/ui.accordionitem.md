
{{memo a singular pane of the accordion component}}

Each accordion pane consists of the header and body. The body of a pane can be collapsed/expanded by clicking on the appropriate header. Check [accordionitem](desktop/accordionitem.md) documentation for more detailed description.

### Constructor

~~~js
	var accordionitem = webix.ui({
		view:"accordionitem", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_accordionitem({
		...config options goes here..
	});
~~~
