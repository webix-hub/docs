lockCell
=============


@short:
	forbids editing a cell

@params:

- rowId			number		the row id
- columnId		number		the column id
- state			boolean		true - to lock a cell, false - to unlock it			


@example:
$$("ssheet").lockCell(rowId, columnId, state);

@template:	api_method
@descr:
If the cell isn't specified, the selected cell will be locked.

@relatedsample:
65_spreadsheet/02_api/15_lock_cell.html

@related:
spreadsheet/cell_content.md#lockingunlockingcells

@relatedapi:
api/ui.spreadsheet_iscelllocked.md

@seolinktop: [html5 framework](https://webix.com)
@seolink: [web spreadsheet](https://webix.com/spreadsheet/)