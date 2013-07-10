{{memo the very base object for all components}}

The component serves as the base class that defines properties, methods, and events common for all other components that make up the library. Not intended for direct use.

### Constructor

~~~js
	var baseview = webix.ui({
		view:"baseview", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_baseview({
		...config options goes here..
	});
~~~
