

{{memo A control that visualized complex hierarchical data in a compact way. }}

The component is used for space-saving presentation of big tree-like data. Relations between tree elements are reflected using color graduation or correlation of proportions. One-level rendering of tree data is also possible with Treemap. Check [treemap](desktop/treemap.md) documentation for more detailed description.

### Constructor

~~~js
	var treemap = webix.ui({
		view:"treemap", 
		container:"mydiv", 
		...config options will be here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_treemap({
		...config options will be here..
	});
~~~

### Where to start

- [Overview of Sidemenu Widget](desktop/treemap.md)
- [Samples](http://docs.webix.com/samples/60_pro/11_treemap/index.html)