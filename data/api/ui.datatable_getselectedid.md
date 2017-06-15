getSelectedId
=============

@short:
	returns the selected elements' ids

@params:
- asArray		boolean		optional, specifies whether the returning result should be array
- asString		boolean		optional, specifies whether the returning result should be string

@returns:
- ids			object,array,string			cell/row/column id or array of them

@example:

//return ids as an array of objects
grid.getSelectedId(true);

//return ids as an array of strings
grid.getSelectedId(true, true);


@template:	api_method
@descr:

If no parameters were passed to the method, it returns the id as an object (for one selected element) or as an array of objects (for several elements).

The format of the selection result if the second parameter (asString) is false:

~~~js
{ column:"votes", row:4, id:4 } // "row" selection
~~~

where:

- <i>column</i> - the column id
- <i>row</i> - the row id
- <i>id</i> - string value of the ID (the same as if you pass asString)

If the "asString" parameter was set, the result value depends on the selection mode: 

- "row" or true - 4 (as in dataset)
- "column" - "votes"
- "cell" -  "4_votes"

@related:
	datatable/selection.md
@relatedapi:
    api/ui.datatable_getselecteditem.md
    api/ui.datatable_mapselection.md
    api/ui.datatable_select.md
    api/ui.datatable_unselect.md
    api/ui.datatable_clearselection.md



@seolinktop: [ui component library](https://webix.com)
@seolink: [javascript datagrid library](https://webix.com/widget/datatable/)