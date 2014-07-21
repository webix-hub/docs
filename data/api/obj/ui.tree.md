
{{memo a hierarchical structure of nodes}}

Each node in the tree might contain any number of other nodes, called as child. Nodes that contain child nodes can be expanded or collapsed. <br>
The component supports in-line node editing, advanced drag-and-drop, three-state checkboxes etc. Check [tree](/) documentation for more detailed description.

### Constructor

~~~js
	var tree = webix.ui({
		view:"tree", 
		container:"mydiv", 
		...config options goes here..
	})
	//or, in case of jQuery
	$("#mydiv").webix_tree({
		...config options goes here..
	});
~~~
