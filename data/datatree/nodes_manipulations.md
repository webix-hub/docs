Tree Nodes Manipulations
===========================

Adding nodes
----------------------------
Generally, to add a node (parent or child) you should use the add method. 
At what position the element will be added depends on parameters you pass to the method.

Method add accepts 3 parameters:

- **obj** - the item object
- **pos** - the position that the new item should have after being inserted into the tree (zero-based numbering). <br> Note, 
  - *0* - the item will be added as the first child (start position)
  - *-1* - the item will be added as the last child (end position)
- **parent** - (optional) the parent node id. If it's not specified, the item will be added to the root of the tree

{{note
Note, you can use the getBranchIndex() method to get the position of a node by its id (read [more](datatree/getting_value.md#gettingthenodeindex)).
}}

<table class="list">
	<caption class="caption">
		<strong>Table 1 </strong>
		Adding nodes
	</caption>
	<thead>
	<tr>
		<th>
			Nesting level
		</th>
		<th>
			Example
		</th>
	</tr>
	</thead>
	<tbody>
	<tr>
        <td>Root node</td>
        <td>
~~~js
tree = new webix.ui({ view:"tree",... });
            
tree.add({ value:"New item"}, 0);
~~~
<br>
<img src="datatree/adding_parent_node.png"/>
		</td>
	</tr>
	<tr>
        <td>Child node (first child)</td>
		<td> 
~~~js
tree=new webix.ui({view:'tree',..});
    
var parentId= tree.getSelectedId();
tree.add( {value:"New item"}, 0, parentId);
~~~
<br>
<img src="datatree/adding_child_node.png"/>
	</td>
	</tr>
	<tr>
        <td>Child node (second child)</td>
		<td>
~~~js
tree=new webix.ui({view:'tree',..});

var parentId = tree.getSelectedId();
var pos = tree.getBranchIndex("node2"); //'node2' is the 'Skoda' item's id

tree.add( {value:"New item"}, pos, parentId);
~~~
<br>
<img src="datatree/adding_child_node_02.png"/>
		</td>
	</tr>
	</tbody>
</table>



Deleting nodes
----------------------------
To delete a node (parent or child) you should use the remove method and specify the id of the required node there:

{{snippet
Deleting the currently selected node
}}
~~~js
tree = new webix.ui({ view:"tree",... });

var nodeId = tree.getSelectedId();
tree.remove(nodeId);
~~~

Selecting nodes
------------------------
To select a specific node you should call the api/link/ui.tree_select.md method:

{{snippet
	Selecting a node
}}
~~~js
tree = new webix.ui({ view:"tree",... });

tree.select("node2");// 'node2' is the item id
~~~

<br>

For more details, read article datatree/selection.md.

Expanding/collapsing branches
------------------------------

Tree nodes are collapsed and expanded 

- by clicking on a **"+/-"** icon or a node (default behavior);
- by clicking on a **node text** provided that **activeTitle** property is defined for the tree. 

~~~js
view:"tree", 
activeTitle:true, //false by default
data:[...]
~~~

{{sample 17_datatree/01_loading/01_json_data.html}}


Tree provides several methods to manage 'open'/'close' state of a node. They are:

<table class='list'>
	<caption class="caption">
		<strong>Table 1 </strong>
		Managing 'open'/'close' state of a node
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
		<td>api/link/ui.tree_open.md</td>
		<td>opens the branch with the specified id</td>
	</tr>
	<tr>
		<td>api/link/ui.tree_close.md</td>
		<td>closes the branch with the specified id</td>
	</tr>
    <tr>
		<td>api/link/ui.tree_openall.md</td>
		<td>opens all branches in the tree</td>
	</tr>
	<tr>
		<td>api/link/ui.tree_closeall.md</td>
		<td>closes all branches in the tree</td>
	</tr>
	<tr>
		<td>api/link/ui.tree_isbranchopen.md</td>
		<td>checks whether the specified branch is opened</td>
	</tr>
    <tr>
    	<td>api/link/ui.tree_getopenitems.md</td>
        <td>returns ids of the opened branches</td>
    </tr>
	</tbody>
</table>

{{snippet
Checking whether the currently selected branch is opened
}}
~~~js
tree = new webix.ui({ view:"tree",... });

var nodeId = tree.getSelectedId();
tree.isBranchOpen(nodeId);
~~~


Filtering nodes
--------------------
To filter the tree nodes you should call the filter method:

{{snippet
	Filtering the tree
}}
~~~js
tree = webix.ui({ view:'tree', ...});

tree.filter("#value#", "abc");//leaves in the tree just items that contain text 'abc' 
~~~

{{sample
	17_datatree/04_api/03_filter.html
}}

Read more on the topic in article datatree/filtering.md.

Sorting nodes
--------------------
To filter the tree nodes you should call the sort method:

{{snippet
	Ascending sort in the tree
}}
~~~js
tree = webix.ui({ view:'tree', ...});

tree.sort("#value#", "asc");//sorts all nodes (parent, child) 
~~~

{{sample
	17_datatree/04_api/02_sort.html
}}

Read more on the topic in article datatree/sorting.md.

Updating the tree
---------------------------------
To update the tree you may call one of 2 appropriate methods:

- update
- refresh

*Methods lead to one and the same result and don't have any specificity.*

~~~js
tree.refresh();
//or
tree.updateItem(node_id, nodeObj);
~~~

@spellcheck:api