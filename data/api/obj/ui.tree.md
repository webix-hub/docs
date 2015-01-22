
{{memo A hierarchical structure of nodes.}}

Each node in the tree might contain any number of nodes. Nodes that contain child nodes can be expanded or collapsed.

The component supports in-line node editing, advanced drag-and-drop, three-state checkboxes etc. Check [tree](datatree/index.md) documentation for more detailed description.

### Constructor

~~~js
var tree = webix.ui({
	view:"tree", 
	container:"mydiv", 
	...config options go here..
})
//or, in case of jQuery
$("#mydiv").webix_tree({
	...config options go here..
});
~~~
