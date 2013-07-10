selectAll
=============



@short:
	selects all items or the specified range

@params:
* from		string		the id of an item that selection will be started from
* to		string		the id of an item that selection will be ended with

@example:
webix.ui({
    view:"dataview",
    id:"data",
    ...
});
$$('data').select();//selects all items in dataview

@related:
	desktop/selection.md
@relatedapi:
    api/selectionmodel_select.md
    api/selectionmodel_isselected.md
    api/selectionmodel_getselectedid.md
    api/selectionmodel_unselect.md
    api/selectionmodel_unselectall.md

@template:	api_method
@defined:	SelectionModel	
@descr:
If the parameters aren't specified, all items will be selected.

