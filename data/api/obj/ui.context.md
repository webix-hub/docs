
{{memo a pop-up window displayed on firing the 'contextMenu' event (mouse right-clicks)}}

The component presents a plain window that can contain any content. Check [context](desktop/context.md) documentation for more detailed description.

### Constructor

~~~js
	var context = webix.ui({
		view:"context", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_context({
		...config options goes here..
	});
~~~
