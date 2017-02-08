close
=============


@short: closes the branch with the specified id
	
@params:
- id		id		the node id

@example:
tree = new webix.ui({
	view:"tree",
	data: [
		{ id:"branch1", value:"The Shawshank Redemption", data:[
			{ id:"1.1", value:"Part 1" },
			{ id:"1.2", value:"Part 2" }
		]},
		{ id:"branch2", value:"The Godfather", data:[
			{ id:"2.1", value:"Part 1" }
		]}
	]
});	

tree.close('branch1');

@template:	api_method
@relatedapi:
	api/treeapi_open.md
    api/treeapi_closeall.md
    api/treeapi_openall.md
    api/treeapi_isbranchopen.md
@related:
	datatree/nodes_manipulations.md
@descr:


