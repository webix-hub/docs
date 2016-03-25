eachSelectedCell
=============

@short:
	iterates over all selected cells in the table

@params:

- handler		function			the handler function


@example:

$$("ssheet").eachSelectedCell(
    function (cell){ 
        console.log($$("ssheet").getCellValue(cell.row,cell.column) )
    }
);

@template:	api_method
@descr:

