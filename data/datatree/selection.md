Items Selection
====================
Tree provides an ability to select leaves and branches within it.

Single-item selection
---------------------------
By default, selection is disabled in Tree. To activate it you should set the api/link/ui.treetable_select_config.md parameter to *true*.

{{snippet
Enabling selection in Tree
}}
~~~js
tree = new webix.ui({
  view: "tree",
  ...
  select: true
})
~~~

{{sample
	17_datatree/04_api/01_selection.html
}}

Multiple selection 
-------------------
To enable multiple selection in Tree, you should set parameter api/link/ui.treetable_select_config.md to *multiselect*.

{{snippet
Enabling multi-selection in Tree
}}
~~~js
tree = new webix.ui({
  view: "tree",
  ...
  select: "multiselect"
})
~~~

{{sample
	17_datatree/04_api/04_multi_select.html
}}

Related methods
--------------------
<table class='list'>
	<caption class="caption">
		<strong>Table 1 </strong>
		Selection methods
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
		<td>api/link/ui.tree_getselectedid.md</td>
		<td>returns the selected cells</td>
	</tr>
    <tr>
    	<td>api/link/ui.tree_moveselection.md</td>
        <td>moves selection in the specified direction</td>
    </tr>
	<tr>
		<td>api/link/ui.tree_select.md</td>
		<td>selects the specified item</td>
	</tr>
    <tr>
    	<td>api/link/ui.tree_selectall.md</td>
        <td>selects all items</td>
    </tr>
    <tr>
		<td>api/link/ui.tree_isselected.md</td>
		<td>checks whether the specified item is selected or not</td>
	</tr>
	<tr>
		<td>api/link/ui.tree_unselect.md</td>
		<td>cancels selection of the specified item</td>
	</tr>
    <tr>
    	<td>api/link/ui.tree_unselectall.md</td>
        <td>removes selection from all items</td>
    </tr>
	</tbody>
</table>

Related events
-------------------
<table class="list">
	<caption class="caption">
		<strong>Table 3</strong>`
		Selection events
	</caption>
	<thead>
	<tr>
		<th>
			Event
		</th>
		<th>
			Description
		</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>api/link/ui.tree_onafterselect_event.md</td>
		<td>fired after a cell is selected</td>
	</tr>
	<tr>
		<td>api/link/ui.tree_onbeforeselect_event.md</td>
		<td>fired before a cell is selected</td>
	</tr>
	<tr>
		<td>api/link/ui.tree_onselectchange_event.md</td>
		<td>fired when selection is changed in DataTable </td>
	</tr>
	</tbody>
</table>