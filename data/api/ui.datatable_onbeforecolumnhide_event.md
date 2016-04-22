onBeforeColumnHide
=============

@short:
	fires before a column is hidden in datatable

@params:

- id		string/number		the column id

@example:
$$("datatable1").attachEvent("onBeforeColumnHide", function(id){
	// some code 
});

@template:	api_event
@descr:

The event is cancellable. If a handler returns *false*, the column will not be hidden. 

@relatedapi:
api/ui.datatable_onaftercolumnhide_event.md
api/ui.datatable_hidecolumn.md

