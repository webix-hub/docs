{{memo a view with the IFRAME element inside it}}

If you want to place some IFRAME content, note that the component provides much more flexible way to do this than a usual layout.

Check (templates)[api/refs/ui.template.md] for example. Check [iframe](desktop/iframe.md) documentation for more detailed description.

### Constructor

~~~js
	var iframe = webix.ui({
		view:"iframe", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_iframe({
		...config options goes here..
	});
~~~

### Where to start

- [Overview of IFrame Widget](desktop/iframe.md)
- [Samples](http://docs.webix.com/samples/80_docs/iframe.html)