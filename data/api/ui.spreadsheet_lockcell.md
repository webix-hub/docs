lockCell
=============


@short:
	forbids editing a cell

@params:

- rowId			number		the row id
- columnId		number		the column id
- mode			boolean		true - to lock a cell, false - to unlock it			


@example:
$$("ssheet").lockCell(rowId, columnId, mode);

@template:	api_method
@descr:
If the cell isn't specified, the selected cell will be locked.