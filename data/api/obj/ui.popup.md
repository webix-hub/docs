
{{memo a static popup window}}

The window can contain any content, be modal or modeless. The main use case - displaying popup content on some action (e.g. click). Check [popup](desktop/popup.md) documentation for more detailed description.

### Constructor

~~~js
	var popup = webix.ui({
		view:"popup", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_popup({
		...config options goes here..
	});
~~~
