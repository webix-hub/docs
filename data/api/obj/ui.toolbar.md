
{{memo a horizontal toolbar}}

The component can contain various elements inside it (actually, the same elements that the form can contain): an icon, a button, a label, an input box etc. Check [toolbar](desktop/toolbar.md) documentation for more detailed description.

### Constructor

~~~js
	var toolbar = webix.ui({
		view:"toolbar", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_toolbar({
		...config options goes here..
	});
~~~
