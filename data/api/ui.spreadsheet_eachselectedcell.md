eachSelectedCell
=============

@short:
	iterates over all selected cells in the table

@params:

- handler		function			the handler function


@example:

$$("ssheet").eachSelectedCell(
    function (cellId){ 
        console.log($$("ssheet").getCellValue(row,column) )
    }
);

@template:	api_method
@descr:

