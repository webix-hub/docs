combineCells
=============

@short:
	merges several adjacent cells

@params:

- range		object			the range of cells that should be merged



@example:
$$("ssheet").combineCells(range);


@template:	api_method
@descr:
the range object includes three parameters:

- cell - (string) the id of the cell that stars the range
- x - (number) the number of cells that will be merged horizontally
- y - (number) the number of cells that will be merged vertically