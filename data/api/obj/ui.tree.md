
{{memo A hierarchical structure of nodes.}}

Each node in the tree might contain any number of nodes. Nodes that contain child nodes can be expanded or collapsed.

The component supports in-line node editing, advanced drag-and-drop, three-state checkboxes, etc. Check [tree](datatree/index.md) documentation for more detailed description.

### Constructor

~~~js
var tree = webix.ui({
	view:"tree",
	select:true,
	data: [
   		{id:"root", value:"Cars", open:true, data:[
			{ id:"1", open:true, value:"Toyota", data:[
				{ id:"1.1", value:"Avalon" },
				{ id:"1.2", value:"Corolla" },
				{ id:"1.3", value:"Camry" }
			]},
			{ id:"2", value:"Skoda", open:true, data:[
				{ id:"2.1", value:"Octavia" },
				{ id:"2.2", value:"Superb" }
			]}
		]}
	]
});
~~~

### Where to start

- [Overview of the Tree Widget](datatree/index.md)
- [Samples](http://docs.webix.com/samples/17_datatree/index.html)