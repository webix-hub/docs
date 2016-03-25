combineCells
=============

@short:
	merges several adjacent cells

@params:

- range		object			optional, the range of cells that should be merged



@example:
$$("ssheet").combineCells(range);


@template:	api_method
@descr:
If the range parameter isn't set, spreadsheet combines selected cells.

The range object includes three properties:

- cell - (string) the id of the cell that starts the range
- x - (number) the number of cells that will be merged horizontally
- y - (number) the number of cells that will be merged vertically

