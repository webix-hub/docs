
{{memo a container control that presents multiple horizontal or vertical panes}}

A collection of panes that make up the component allows you to organize the content in a space-saving way. <br> The main difference from a standard layout is that accordion can be collapsed/expanded by clicking on the header of a pane. Check [accordion](desktop/accordion.md) documentation for more detailed description.

### Constructor

~~~js
	var accordion = webix.ui({
		view:"accordion", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_accordion({
		...config options goes here..
	});
~~~


### Where to start

- [Overview of Accordion Widget](desktop/accordion.md)
- [Samples](http://docs.webix.com/samples/01_layout/index.html)
