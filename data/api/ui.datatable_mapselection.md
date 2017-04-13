mapSelection
=============


@short: executes some custom method for all cells in the currently selected block
	

@params:
- callback  	function  	the callback function


@example:
// uppercase selected cells
dtable.mapSelection(function(value, row_id, column_id, row_ind, col_ind){
    return value.toString().toUpperCase(); 
});


@template:	api_method
@descr:
Parameters of the callback function are:

- *value*  - (string|number) the cell value
- *row_id* - (string|number) the row id
- *column_id* - (string|number) the column id
- *row_ind*  -  (number) the row index of a cell within the selected block
- *col_ind*  -  (number) the column index of a cell within the selected block

@related:
	datatable/get_set_data.md#gettingvaluesofcellsrange
@relatedapi:
	api/ui.datatable_mapcells.md
@relatedsample:
	15_datatable/05_selection/07_map_selection.html
