Keyboard navigation
====================================
We can single out 2 types of navigation in DataTable:

1. [Navigating the selection](#selectionnavigation)
2. [Navigating the active editor](#activeeditornavigation)

When one of the types is available, the other is blocked, i.e. when you open some cell editor you won't navigate the selection any more but can navigate the active editor within cells available for editing. Once 
no editors is open, you can again navigate the selected cell (row, column).


Selection navigation
--------------------------------
Initially, the selection navigation is disabled in DataTable.

To activate it, set the api/link/ui.datatable_navigation_config.md parameter to *true*.

{{snippet
Activating the selection keyboard navigation in DataTable
}}
~~~js
webix.ui({
    view:"datatable",
    navigation:true,
    ...
})
~~~

<table class="common_table" cellspacing="0" cellpadding="5" border="0">
	<caption class="caption">
		<strong>Table 1 </strong>
		Keyboard commands for navigating the selection
	</caption>
	<thead>
	<tr>
		<th>
			<strong> Command </strong>
		</th>
		<th>
			<strong> Description </strong>
		</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>Up arrow key</td>
		<td>moves one cell (row) to the up</td>
	</tr>
	<tr>
		<td>Down arrow key</td>
		<td>moves one cell (row) to the down</td>
	</tr>
	<tr>
		<td>Left arrow key</td>
		<td>moves one cell (column) to the left</td>
	</tr>
	<tr>
		<td>Right arrow key</td>
		<td>moves one cell (column) to the right</td>
	</tr>
    <tr>
		<td>Home</td>
		<td>moves to the top left cell(row, column) in the grid</td>
	</tr>
	<tr>
		<td>End</td>
		<td>moves to the bottom right cell(row, column) in the grid</td>
	</tr>
	<tr>
		<td>PGUP</td>
		<td>scrolls the table up</td>
	</tr>
	<tr>
		<td>PGDN</td>
		<td>scrolls the table down</td>
	</tr>
	</tbody>
</table>

{{sample 15_datatable/05_selection/09_navigation.html }}

Active editor navigation
--------------------------
Active editor navigation is navigating within cells available for editing: closing the currently active editor and opening the editor in the next/previous cell. 

The navigation is activated once you enable editing in the table.

~~~js
dtable = new webix.ui({
        view:"datatable",
        ...
        editable:true
});
~~~
<table class="common_table" cellspacing="0" cellpadding="5" border="0">
	<caption class="caption">
		<strong>Table 2 </strong>
		Keyboard commands for navigating the active editor
	</caption>
	<thead>
	<tr>
		<th>
			<strong> Command </strong>
		</th>
		<th>
			<strong> Description </strong>
		</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>Tab</td>
		<td>closes the current editor and openes the next one</td>
	</tr>
	<tr>
		<td>Tab + Shift</td>
		<td>closes the current editor and openes the previous one</td>
	</tr>
	</tbody>
</table>


You can read more about editing and active editor navigation in article datatable/editing.md.

{{sample 15_datatable/04_editing/02_tab_support.html }}