Getting/setting the node
====================================
Tree provides a set of methods for manipulating the node value and retrieving the node id.


Getting the node object/value
-----------------------------
To get the node object, you should use method api/link/ui.tree_getitem.md:

{{snippet
Getting the node object
}}

~~~js
tree = new webix.ui({
    view:"tree",
    data: [
        { id:"branch1", value:"The Shawshank Redemption", data:[
            { id:"part1", value:"Part 1" },
            { id:"part2", value:"Part 2" }
        ]}
    ]
}); 

//'node' variable will contain an object of the related tree node
var node = tree.getItem('branch1');

//you can access data members directly
var value = node.value; // ->"The Shawshank Redemption"
~~~
<br>

**Item object** has the following properties:

- **<i>id</i>** - (*string*) the item id
- **<i>value</i>** - (*string*) the item value
- **<i>$level</i>** - (*number*) the level of nesting (one-based numbering)
- **<i>parent</i>** - (*string*) the id of the item's parent
- **<i>$count</i>** - (*number*) the number of children
- **<i>open</i>** - (*boolean*) defines whether the node is collapsed or expanded (just for parent nodes)

For example, variable **node** from the code  snippet above looks as in:

~~~html
node = {
  	$count: 2,
	$level: 1,
	$parent: 0,
	id: "branch1",
	open: true,
	value: "The Shawshank Redemption"
}
~~~


Setting the node value
-----------------------------
To change the current value of a node (the node title), you should use the following technique:

{{snippet
	Changing the node title
 }}
~~~js
tree = new webix.ui({ view:"tree",...});

var nodeObj = tree.getItem(node_id);
nodeObj.value = new_value;
 
tree.refresh();
//or
tree.updateItem(node_id, nodeObj);
~~~
Methods api/link/ui.tree_refresh.md and    api/link/ui.tree_updateitem.md lead to one and the same result and don't have any specificity.


Getting the node index
------------------------------------
To get the index of a node in the branch (zero-based numbering) you should use the getBranchIndex method:

{{snippet 
	Getting the node index
}}
~~~js
tree = new webix.ui({
    view:"tree",
    data: [
        { id:"branch1", value:"The Shawshank Redemption", data:[
            { id:"1.1", value:"Part 1" },
            { id:"1.2", value:"Part 2" }
        ]}
    ]
});

var index  = tree.getBranchIndex('1.1'); // -> 0
var index1 = tree.getBranchIndex('1.2'); // -> 1
~~~

There is also the api/link/ui.tree_getindexbyid.md method to get the node index but we don't suggest using it. It's a common  method that 
is inherited by all data-containing components from the api/refs/datastore.md class and not intended for using 
with tree-like data structures. 



Getting the node id
---------------------------------
To get the id of a node you can use one of the following methods:

<table class="list">
	<caption class="caption">
		<strong>Table 1 </strong>
		Methods for getting the node id
	</caption>
	<thead>
	<tr>
		<th>
			Method	
		</th>
		<th>
			Description
		</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>api/link/ui.tree_getidbyindex.md</td>
		<td>returns the item id by its index</td>
	</tr>
	<tr>
		<td>api/link/ui.tree_getparentid.md</td>
		<td>returns the id of the parent node</td>
	</tr>
	<tr>
		<td>api/link/ui.tree_getfirstchildid.md</td>
		<td>returns the id of the first child of the specified branch. If there are not any, returns null</td>
	</tr>
	<tr>
		<td>api/link/ui.tree_getnextsiblingid.md</td>
		<td>returns the id of the next sibling of the specified node</td>
	</tr>
	<tr>
		<td>api/link/ui.tree_getprevsiblingid.md</td>
		<td>returns the id of the previous sibling of the specified node</td>
	</tr>
	</tbody>
</table>

{{snippet 
	Getting the parent node id
}}
~~~js
tree = new webix.ui({
    view:"tree",
    data: [
        { id:"branch1", value:"The Shawshank Redemption", data:[
            { id:"part1", value:"Part 1" },
            { id:"part2", value:"Part 2" }
        ]}
    ]
});

var parent = tree.getParentId('part1'); // -> 'branch1'
~~~

