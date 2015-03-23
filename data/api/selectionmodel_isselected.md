isSelected
=============



@short:
	checks whether the specified item is selected or not

@params:
- id		id		the id of the item in question


@returns:
-value	boolean	<i>true</i> if the specified item is selected, otherwise - <i>false</i>

@example:
webix.ui({
    view:"dataview",
    id:"data",
    ...
});
$$('data').select(2);     //selects an item with the id=2
$$('data').isSelected(2); //-> 'true'

@related:
	desktop/selection.md
@relatedapi:
    api/selectionmodel_getselectedid.md
    api/selectionmodel_select.md
    api/selectionmodel_selectAll.md
    api/selectionmodel_unselect.md
    api/selectionmodel_unselectall.md



@template:	api_method
@defined:	SelectionModel	
@descr:


