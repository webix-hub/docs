getSelectedId
=============

@short:
	returns the selected cells

@params:
*asArray    bool    specifies whether the returning result can be only array or both array and object
*asString   bool    the id will be a string ( row id )

@returns:
-selected cells    object,array    the currently selected cells

@example:


@template:	api_method
@descr:
The format of the selection object:

- <i>column</i> - the column id
- <i>row</i> - the row id
- <i>id</i> - the cell id ({row}_{column})

if "asString" parameter was set, only row id will be returned

@related:
	datatable/selection.md
@relatedapi:
    api/ui.datatable_getselectedid.md
    api/ui.datatable_mapselection.md
    api/ui.datatable_select.md
    api/ui.datatable_unselect.md
    api/ui.datatable_clearselection.md

