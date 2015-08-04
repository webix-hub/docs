
{{memo a single-selection drop-down list box}}

The component can be populated with data from the server side or a file: each item in the list will correspond to an item in the data source. Multi-selection mode isn't supported. Check [select](desktop/select.md) documentation for more detailed description.

### Constructor

~~~js
	var select = webix.ui({
		view:"select", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_select({
		...config options goes here..
	});
~~~
