select
=============



@short:
	selects the specified item(s)

@params:
- id		string, array		the id of a single item or an array of items ids
- non_modal		bool		if it's set to <i>true</i>, each next method call for the same item will select/unselect this item by turns.<br> if it's set to <i>false</i>, the first method call selects the item and further calls won't affect the selection. The default value - <i>false</i>
- continue		bool		if it's set to <i>true</i>, the method won't affect the existing selection (will select new items but preserve selection of old items). The default value - <i>false</i>

@example:
webix.ui({
    view:"dataview",
    id:"data",
    ...
});
$$('data').select();                     //selects all items
$$('data').select(2, true);              //selects an item with the id=2
$$('data').select([2,3,5], false, true); //selects an array of items with ids: 2,3,5

@related:
	desktop/selection.md
@relatedapi:
    api/selectionmodel_selectAll.md
    api/selectionmodel_isselected.md
    api/selectionmodel_getselectedid.md
    api/selectionmodel_unselect.md
    api/selectionmodel_unselectall.md
@relatedsample:
	06_dataview/01_initialization/01_init.html

@template:	api_method
@defined:	SelectionModel	
@descr:
If the parameters aren't specified, all items will be selected.

