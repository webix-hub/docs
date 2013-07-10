
{{memo a container control with a navigation tab panel that keeps a set of views and displays one view at a time}}

The component optimizes the process of creating tabbed structures on the page - elements that present multiple groups of content switched by tabs. Check [tabview](desktop__tabview.md) documentation for more detailed description.

### Constructor

~~~js
	var tabview = webix.ui({
		view:"tabview", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_tabview({
		...config options goes here..
	});
~~~
