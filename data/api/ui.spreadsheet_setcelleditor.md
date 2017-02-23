setCellEditor
=============

@short:
	creates an editor in a cell

@params:

- rowId					number		the row id
- columnId				number		the column id
- editorObject			object		an object with editor type and options (in case of richselect type)



@example:
$$("ss1").setCellEditor(8,1,{ editor:"richselect", options:["One", "Two", "Three"]});
// or
$$("ss1").setCellEditor(8,2,{ editor:"richselect", options:"B3:B7" });


@template:	api_method
@descr:

The *editorObject* parameter can have the following properties:

- type - (string) the editor type
- options - (string,array) a range of cell references or an array of editor options

@relatedsample:
65_spreadsheet/02_api/07_dropdowns.html

@related:
spreadsheet/cell_content.md#addinganeditorintoacell

@relatedapi:
api/ui.spreadsheet_getcelleditor.md