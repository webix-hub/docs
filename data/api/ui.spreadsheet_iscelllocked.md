isCellLocked
=============



@short:
	checks whether the cell under question is locked

@params:

- rowId			number		the row id
- columnId		number		the column id

@returns:

- state			boolean		true, if the cell is locked, otherwise - false

@example:
var isLocked = $$("ssheet").isCellLocked(rowId, columnId);

@template:	api_method
@descr:

@relatedsample:
02_api/07_lock_cell.html

