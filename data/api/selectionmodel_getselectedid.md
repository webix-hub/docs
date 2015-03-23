getSelectedId
=============



@short:
	returns the id(s) of the selected item(s)

@params:
- as_array		boolean		specifies whether the result should be always returned as an array.<br> The default value is <i>false</i>


@returns:
-id		string,array	the single item id or an array of ids

@example:
//single select mode
var id = list.getSelectedId(); // id = someid

//multiselect mode
var id = list.getSelectedId(); // id = [someid1, someid2, someid3]


@template:	api_method
@defined:	SelectionModel	
@related:
	desktop/selection.md
@relatedapi:
    api/selectionmodel_isselected.md
    api/selectionmodel_select.md
    api/selectionmodel_selectall.md
    api/selectionmodel_unselect.md
    api/selectionmodel_unselectall.md
@relatedsample:
	06_dataview/04_manipulations/01_adding.html

@descr:


