mapSelection
=============


@short: executes some custom method for all cells in the currently selected block
	

@params:
- callback  function  the callback function


@example:
//uppercase selected cells
dtable.mapSelection(function(value){
    return value.toString().toUpperCase(); 
});


@template:	api_method
@descr:
@callback:
-value    string|int    the cell value
-row_id    string|int    the row id
-column_id    string|int    the column id
-row_ind    int    the row index of a cell within the selected block
-col_ind    int    the column index of a cell within the selected block

@related:
	datatable/get_set_data.md#gettingvaluesofcellsrange
@relatedapi:
	api/ui.datatable_mapcells.md
@relatedsample:
	15_datatable/05_selection/07_map_selection.html
