Checkboxes in Tree
==================================
In this chapter we will talk about checkboxes in tree nodes: how to add, customize them or provide the 3-state behavior.

Adding checkboxes to nodes
-----------------------------
Tree provides a predefined template for check boxes, which is - *{common.checkbox()}* <br> (read more about templates in chapter datatree/node_templates.md). 

<img src="datatree/standard_checkbox.png"/>

So, to add checkboxes to tree nodes you should specify the api/link/ui.tree_template_config.md property like this:

{{snippet 
	Adding checkboxes to tree nodes
}}
~~~js
tree = new webix.ui({
	view:"tree",
	template:"{common.icon()} {common.checkbox()} {common.folder()} #value#"
    ...
});
~~~
*{common.icon()} template adds '+'/'-' icons to the nodes, {common.folder()} - adds folder icons.*

{{sample
	17_datatree/02_checkbox/01_basic.html
}}

3-state checkboxes
---------------------
In addition to standard 2-state behavior supports 3-state checkboxes.

<table class="list">
	<caption class="caption">
		<strong>Table 1 </strong>
		Types of checkbox behavior
    </caption>
	<thead>
	<tr>
		<th>
			Behavior
        </th>
		<th>
			Description
		</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>2-state (standard)</td>
		<td>
			<ul>
				<li>When the user checks/unchecks a parent node - this only node is checked/unchecked </li>
				<li>When the user checks/unchecks a child node - this only node is checked/unchecked</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>3-state</td>
		<td> 
			<ul>
				<li>When the user checks/unchecks a parent node - this parent node and all its child nodes (of each nesting level) are checked/unchecked </li>
				<li>When the user checks/unchecks a child node - this only node is checked/unchecked</li>
			</ul>
		</td>
	</tr>
	</tbody>
</table>

<br>

To provide 3-state behavior for tree checkboxes you should set the api/treestatecheckbox_threestate_config.md property to *true*:

{{snippet
	Activating 3-state behavior for checkboxes
}}
~~~js
tree = new webix.ui({
	view:"tree",
	template:"{common.icon()} {common.checkbox()} {common.folder()} #value#",
	threeState: true
	...
});
~~~

{{sample
	17_datatree/02_checkbox/02_three_state.html
}}

Manipulations with checkboxes
--------------------------

Checkboxes can be checked and unchecked with special API methods. It is possible to get checked items and define whether the item is currently checked or not. 

- **checkItem**(id)/ **uncheckItem**(id) - checks/unchecks tree node with the specified ID;
- **getChecked()** - returns an array of IDs of the checked items;
- **isChecked(id)** - helps find out whether the specified node is checked at the moment. 

~~~js
tree.checkItem(tree.getSelectedId());

tree.uncheckItem(tree.getSelectedId());
~~~

Checkboxes can be used for **component refreshing** just from browser. 

Generally, components are refreshed by applying the **refresh()** method to them, 
yet it can be called each time tree checkbox changes. The item with this checkbox will be refreshed:

~~~js
webix.ui({
    view:"datatable",
    checkboxRefresh:true
});
~~~
