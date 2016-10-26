deleteRow
=============


@short:
	deletes a row by id

@params:
- rowId		number		the row id


@example:

$$("ssheet").deleteRow(rowId);

@template:	api_method
@descr:
If the rowId parameter isn't specified, the method deletes the selected row.

@related:
spreadsheet/rows_columns.md#workingwithrows

@relatedapi:
api/ui.spreadsheet_getrow.md
api/ui.spreadsheet_hiderow.md
api/ui.spreadsheet_insertrow.md
api/ui.spreadsheet_isrowvisible.md

