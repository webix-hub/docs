unselect
=============



@short:
	removes selection from the specified item

@params:
* id		string		the item id 



@example:
webix.ui({
	view:"dataview",
    id:"data",
	...
});
$$('data').unselect($$('data').getFirstId()); //removes selection from the first item

@template:	api_method
@defined:	SelectionModel	
@related:
	desktop/selection.md
@relatedapi:
	api/selectionmodel_unselectAll.md
    api/selectionmodel_isselected.md
    api/selectionmodel_getselectedid.md
    api/selectionmodel_select.md
    api/selectionmodel_selectall.md
@descr:

@descr:
The input parameter is optional. If no item is specified, selection will be removed from all currently selected items


