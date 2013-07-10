onBeforeSelect
=============


@short:
	fires before item selection is started

@params:
- id		id		id of item
- selection	bool		true if we select, false if unselect

@example: 
	
some.attachEvent("onBeforeSelect", function(id, selection){
    //... some code here ... 
});

@template:	api_event
@defined:	SelectionModel
@relatedapi:
	api/selectionmodel_onafterselect_event.md
@related: 
	desktop/selection.md
	
@descr:


