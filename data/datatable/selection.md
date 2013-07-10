Selection with Datatable
==========

In DataTable you can specify different types of selection depending on your needs.

Available modes are:

1. *cell*;
2. *row*;
3. *column*;
4. *multi cell*;
5. *multi row*;
6. *multi column*;
7. *block selection*.



The desired type is set through parameters [select](api/ui.datatable_select_config.md), [multiselect](api/ui.datatable_multiselect_config.md) and [blockselect](api/ui.datatable_blockselect_config.md).

The table below shows which combination of parameters you should use for each type.

<table class='list'>
	<caption class="caption">
		<strong>Table 1 </strong>
		Types of selection
	</caption>
	<thead>
	<tr>
		<th align="left">
			Type of selection
		</th>
		<th align="left">
			Related parameters
		</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td> single cell</td>
		<td>
~~~js
select:"cell"
~~~
		</td>
	</tr>
	<tr>
		<td> single row</td>
		<td>
~~~js
select:"row"
~~~
		</td>
	</tr>
	<tr>
		<td> single column</td>
		<td>
~~~js
select:"column"
~~~
		</td>
	</tr>
	<tr>
		<td> multiple cells</td>
		<td>
~~~js
select: "cell", multiselect: true
~~~
		</td>
	</tr>
	<tr>
		<td> multiple rows	</td>
		<td>
~~~js
select: "row", multiselect: true
~~~
		</td>
	</tr>
	<tr>
		<td> multiple columns	</td>
		<td>
~~~js
select: "column", multiselect: true
~~~
		</td>
	</tr>
	<tr>
		<td> visual block selection </td>
		<td>
~~~js
select: "cell", multiselect: true, blockselect: true
~~~
		</td>
	</tr>
	</tbody>
</table>

For example, to set in your DataTable multi row selection, you should use the following code:

{{snippet
Enabling multi row selection
}}
~~~js
grid = new webix.ui({
	view:"datatable",
	...
	select:"row",
	multiselect:true
})
~~~

{{sample 15_datatable/05_selection/05_multi_row_selection.html }}

Related methods
--------------------
<table class='list'>
	<caption class="caption">
		<strong>Table 2 </strong>
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
		<td>api/ui.datatable_clearselection.md</td>
		<td>clears selection</td>
	</tr>
    <tr>
		<td>api/ui.datatable_getselectedid.md</td>
		<td>returns the selected cells</td>
	</tr>
	<tr>
		<td>api/ui.datatable_getselection.md</td>
		<td>returns the ids of the selected cell(s)</td>
	</tr>
	<tr>
		<td>api/ui.datatable_mapselection.md</td>
		<td>executes some custom method for all cells in the currently selected block</td>
	</tr>
    <tr>
    	<td>api/ui.datatable_moveselection.md</td>
        <td>moves selection to the specified direction</td>
    </tr>
	<tr>
		<td>api/ui.datatable_select.md</td>
		<td>selects the specified element</td>
	</tr>
	<tr>
		<td>api/ui.datatable_selectrange.md</td>
		<td>selects the specified range of elements</td>
	</tr>
	<tr>
		<td>api/ui.datatable_unselect.md</td>
		<td>cancels selection of the specified element</td>
	</tr>
	</tbody>
</table>

Related events
-------------------
<table class="list">
	<caption class="caption">
		<strong>Table 3</strong>
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
		<td>api/ui.datatable_onafterselect_event.md</td>
		<td>fired after a cell is selected</td>
	</tr>
	<tr>
		<td>api/ui.datatable_onafterunselect_event.md</td>
		<td>fired after a cell is unselected</td>
	</tr>
	<tr>
		<td>api/ui.datatable_onbeforeselect_event.md</td>
		<td>fired before a cell is selected</td>
	</tr>
	<tr>
		<td>api/ui.datatable_onbeforeunselect_event.md</td>
		<td>fired before a cell is unselected</td>
	</tr>
	<tr>
		<td>api/ui.datatable_onselectchange_event.md</td>
		<td>fired when selection is changed in DataTable </td>
	</tr>
	</tbody>
</table>
@keyword:
	start