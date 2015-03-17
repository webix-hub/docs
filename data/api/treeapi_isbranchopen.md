isBranchOpen
=============

@short: checks whether the specified branch is open or closed
	

@params:
-id		id	the node id

@returns:
- state	boolean	<i>true</i>, if the branch is opened, otherwise - <i>false</i>

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

tree.isBranchOpen("branch1");

@template:	api_method
@relatedapi:
	api/treeapi_open.md
	api/treeapi_close.md
    api/treeapi_closeall.md
    api/treeapi_openall.md
@related:
	datatree/nodes_manipulations.md
@descr:
