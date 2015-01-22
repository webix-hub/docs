open
====

@short: Opens the branch with the specified id.
	

@params:
-id	id	the node id


@example:
tree = new webix.ui({
	view: "tree",
	data: [
		{ id: "branch1", value: "The Shawshank Redemption", data: [
			{ id: "1.1", value: "Part 1" },
			{ id: "1.2", value: "Part 2" }
		]},
		{ id: "branch2", value: "The Godfather", data: [
			{ id: "2.1", value: "Part 1" }
		]}
	]
});	

tree.open("branch1");


@template:	api_method
@relatedapi:
	api/treeapi_close.md
    api/treeapi_openall.md
	api/treeapi_closeall.md
    api/treeapi_isbranchopen.md
@related:
	datatree/nodes_manipulations.md
    
@descr:

To learn when the open() call has completed loading dynamic data, you can set a promise in [onDataRequest](api/treedataloader_ondatarequest_event.md)
and check for it in api/treeapi_onafteropen_event.md - see [this example](http://forum.webix.com/discussion/comment/3783).