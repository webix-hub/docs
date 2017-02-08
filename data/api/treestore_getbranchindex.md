getBranchIndex
=============

@short: gets index of the node in a specific branch
	

@params:
- id     		id		tree node ID
* parent		id    	optional, ID of the parent node

@returns:
- index   number	 	index of related tree node	

@example:
var tree = webix.ui({
    view:"tree",
    data: [
        { id:"branch1", value:"The Shawshank Redemption", data:[
            { id:"1.1", value:"Part 1" },
            { id:"1.2", value:"Part 2" }
        ]}
    ]
});
 
var index  = tree.getBranchIndex("1.1"); // -> 0
var index1 = tree.getBranchIndex("1.2"); // -> 1

@template:	api_method
@related:
	datatree/getting_value.md#gettingthenodeindex
@descr:
There is also the [getIndexById](api/link/ui.tree_getindexbyid.md) method to get the node index but we don't suggest using it. 
It's a common method that is inherited by all data-containing components from the
[DataStore](api/refs/datastore.md) class and not intended for using with tree-like data structures.

For exact node specifying, pass both node ID and parent node ID into the function:

~~~js
var sel = tree.getSelectedId(); 
var parent = tree.getParentId(sel); 
tree.add({ value:"New item"}, tree.data.getBranchIndex(sel, parent), parent);
~~~


