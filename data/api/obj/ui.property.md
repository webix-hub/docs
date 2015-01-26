
{{memo a structured table of 2 columns that presents 'name:value' pairs for a list of properties}}

The component can be used for creating various on-page editors. The value field can be presented by any control - a text field, a checkbox, a drop-down list box etc. Check [property](/) documentation for more detailed description.

### Constructor

~~~js
	var property = webix.ui({
		view:"property", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_property({
		...config options goes here..
	});
~~~

### Where to start

- [Overview of Property Sheet Widget](desktop/property_sheet.md)
- [Samples](http://docs.webix.com/samples/07_property/index.html)