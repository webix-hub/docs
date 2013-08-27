Getting/setting the cell value
===============================

API of DataTable allows you to retrieve existing values of cells or set new ones.

Getting the value
---------------------

To get the record object, you should use method [item()](api/link/ui.datatable_getitem.md):

{{snippet
Getting the record object
}}

~~~js
grid = webix.ui({ 
	view:"datatable",
	data:[ {id:"row1", title:"The Shawshank Redemption", year:"1994"} ],
    ...
});
...

//'record' variable will contain an object of the related DataTable record
var record = grid.getItem("row1");

//you can access data members directly
var title = record.title;
~~~

Setting the value
---------------------

To change the current value of a cell, you should use the following technique:

{{snippet
Setting the cell value
}}
~~~js
record = grid.getItem(row_id);
record[column_name] = new_value;

grid.refresh();
//or
grid.updateItem(row_id, record);
~~~

Methods [refresh()](api/link/ui.datatable_refresh.md) and [update()](api/link/ui.datatable_updateitem.md) lead to one and the same result and don't have any specificity.


Getting values of cells range 
----------------------
When you work with a block of cells you can use 2 'special' methods allowing you to get values of several cells and perform some action on them:

- [mapCells](api/ui.datatable_mapcells.md) - gets the current values of the specified cells (called for each specified cell by turn).

{{snippet
Reversing text in the specified cells range
}}
~~~js
grid.mapCells(start_row,start_col,numRows,numCols,
function(value, row_id, column_id, row_ind, col_ind){
		return value.toString().split("").reverse().join("");
});
~~~
{{sample 15_datatable/15_api/01_map_cell.html }}


- [mapSelection](api/ui.datatable_mapselection.md) - gets the current values of the selected cells ( called for each selected cell by turn).

{{snippet
Reversing text in all selected cells
}}
~~~js
grid.mapSelection(function(value){
		return value.toString().split("").reverse().join("");
});
~~~
{{sample 15_datatable/05_selection/07_map_selection.html }}

For more on the mentioned and other related methods, see [API Reference](api/refs/ui.datatable.md).
