
{{memo a vertical list of items grouped into sections by some category}}

The component provides navigation within the list and between the sections. 
Support for various data template formats, sorting and filtering features. Check [grouplist](desktop__grouplist.md) documentation for more detailed description.

### Constructor

~~~js
	var grouplist = webix.ui({
		view:"grouplist", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_grouplist({
		...config options goes here..
	});
~~~
