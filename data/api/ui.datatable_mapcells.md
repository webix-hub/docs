mapCells
=============

@short:
	applies the callback to a range of cells

@params:
- startrow    number    		the start row id
- startcol    string    		the start column id
- numrows    number    		the amount of rows
- numcols    number    		the amount of columns
- callback   function    	the function calling for each cell in the specified range

@related:
	datatable/get_set_data.md#gettingvaluesofcellsrange
@relatedapi:
 api/ui.datatable_mapselection.md
@relatedsample:
 15_datatable/15_api/01_map_cell.html

@example:
grid.mapCells(1, "title", 3, 2, function(value, row_id, column_id, row_ind, col_ind) {
    console.log(value, row_id, column_id, row_ind, col_ind);
});

@template:	api_method
@descr: 
Parameters of the callback function are:

- *value*  - (string|number) the cell value
- *row_id* - (string|number) the row id
- *column_id* - (string|number) the column id
- *row_ind*  -  (number) the row index of a cell within the selected block
- *col_ind*  -  (number) the column index of a cell within the selected block


@seolinktop: [javascript framework](https://webix.com)
@seolink: [datagrid javascript](https://webix.com/widget/datatable/)