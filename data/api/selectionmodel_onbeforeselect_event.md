onBeforeSelect
=============


@short:
	fires before item selection is started

@params:
- id		id		id of item
- selection	boolean		true if the item was selected, false if it was unselected

@example: 

some.attachEvent("onBeforeSelect", function (id, selection){
  // ... some code here ...
});

@template:	api_event
@defined:	SelectionModel
@relatedapi:
	api/selectionmodel_onafterselect_event.md
@related: 
	desktop/selection.md

@descr:
