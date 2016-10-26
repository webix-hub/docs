hideRow
=============


@short:
	hides a specified row in the sheet

@params:

- rowId			number			the row id
- state			boolean			true - to hide the row, otherwise - false


@example:

$$("ssheet").hideRow(3, true);

@template:	api_method
@descr:

@related:
spreadsheet/rows_columns.md#workingwithrows

@relatedapi:
api/ui.spreadsheet_deleterow.md
api/ui.spreadsheet_getrow.md
api/ui.spreadsheet_insertrow.md
api/ui.spreadsheet_isrowvisible.md