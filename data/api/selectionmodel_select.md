select
=============



@short:
	selects the specified item(s)

@params:
- id		string, array		the id of a single item or an array of items ids
- preserve		boolean		if it's set to <i>true</i>, the method won't affect the existing selection (will select new items but preserve selection of old items). The default value - <i>false</i>

@example:
webix.ui({
    view:"dataview",
    id:"data",
    ...
});
$$('data').select(2);               //selects an item with the id=2
$$('data').select(3, true);         //selects an extra item, preserving previos selection

$$('data').select([2,3,5]);         //selects a group of items with ids: 2,3,5


@related:
	desktop/selection.md
@relatedapi:
    api/selectionmodel_selectall.md
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
~~~js
    $$('data').select();                     //selects all items
~~~