onAfterAreaRemove
=============

@short:
	fires after a select area was removed

@params:
- area_name		string		the name used to address a select area to change or delete it

@example:
$$('dtable').attachEvent("onAfterAreaRemove", function(area_name){
    // some code here
});

@template:	api_event
@descr:

@relatedapi:
	api/ui.datatable_onbeforearearemove_event.md
	api/ui.datatable_removeselectarea.md