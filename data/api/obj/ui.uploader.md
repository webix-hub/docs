
{{memo a control for uploading multiple files}}

The component allows tracking the whole progress of individual file upload. Fully customazable. Check [uploader](/) documentation for more detailed description.

### Constructor

~~~js
	var uploader = webix.ui({
		view:"uploader", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_uploader({
		...config options goes here..
	});
~~~
