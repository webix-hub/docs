getCellEditor
=============

@short:
	returns the editor set in a cell

@params:

- row			number		the row id
- column		number		the column id

@returns:

- editor		object		an object with editor's type and a set of options (see the details)

@example:
// setting a cell editor
$$("ss1").setCellEditor(8,1,{editor:"richselect", options:["One","Two","Three"]});

// getting the cell editor
$$("ss1").getCellEditor(8,1); //->{editor:"richselect", options:["One","Two","Three"]}

@template:	api_method
@descr:
The returned object contains two properties:

- editor - (string) the type of the editor
- options - (string,array) a range of cell references or an array of editor options

~~~js
{editor:"richselect", options:["One","Two","Three"]}

// or
{editor:"richselect", options:"B3:B7"}
~~~


@relatedsample:
65_spreadsheet/02_api/07_dropdowns.html

@related:
spreadsheet/cell_content.md#addinganeditorintoacell

@relatedapi:
api/ui.spreadsheet_setcelleditor.md

