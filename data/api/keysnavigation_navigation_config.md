navigation
=============


@short: activates the selection keyboard navigation
	

@type: boolean
@example:
webix.ui({
    view:"datatable",
    navigation:true,
    ...
});

@relatedsample:
	15_datatable/05_selection/09_navigation.html
@related: 
	desktop/selection.md


@template:	api_config
@descr:

The property is *true* by default. The following keyboard commands are enabled:

<table class="common_table" cellspacing="0" cellpadding="5" border="0">
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
