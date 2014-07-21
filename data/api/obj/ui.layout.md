{{memo a vertical or horizontal layout without the headers}}

The component allows you to programmatically define interface structure by organizing views in a vertical or horizontal layout. By including layouts one by one, it's possible to create the final screen of any complexity. Check [layout](desktop/layout.md) documentation for more detailed description.

### Constructor

~~~js
	var layout = webix.ui({
		view:"layout", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_layout({
		...config options goes here..
	});
~~~
