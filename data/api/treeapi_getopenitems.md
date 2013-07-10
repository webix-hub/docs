getOpenItems
=============

@short: returns ids of the opened branches
	

@returns:
-items	array	an array of ids	

@example:
tree = new webix.ui({
		view:"tree",
        ...
})
tree.getOpenItems();

@template:	api_method
@descr:
For example, for the tree as in: 

<img src="datatree/quick_start.png"/>

~~~js
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
~~~


the method returns the following array:

~~~html
["1", "2", "root"]
~~~

@related:
	datatree/nodes_manipulations.md