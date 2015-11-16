getSelectedItem
=============

@short: gets an object of the selected data item
	
@params:
* as_array 		boolean		if true, returns an array with selected item(s)

@returns:
- item 	object	object of the selected item with all its properties


@example:
var item = grid.getSelectedItem();
//item =  {id:1, title:"Title", year:1987}

@relatedapi:
	api/ui.datatable_getSelectedId.md
@related:
	datatable/selection.md
@template:	api_method
@descr:

In case of multiple item selection the method will return array of celected items anyway. 
If array mode (<i>"as_array"</i>) is switched on, even one item will be put put into an array.
