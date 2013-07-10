
{{memo the very base class for UI components}}

The class defines properties, methods, and events related to loading and rendering data. Can serves as the base class while creating custom multi-item components. Not intended for direct initialization. 


### Constructor

~~~js
	var proto = webix.ui({
		view:"proto", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_proto({
		...config options goes here..
	});
~~~
