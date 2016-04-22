onBeforeAreaRemove
=============

@short:
	fires before a select area is removed

@params:

- area_name			string			the name used to address a select area to change or delete it

@example:
$$('dtable').attachEvent("onBeforeAreaRemove", function(area_name){
   // some code here
   return true;
});

@template:	api_event
@descr:
The event can be blocked. Return false to block area removal.

@relatedapi:
- api/ui.datatable_onafterarearemove_event.md
- api/ui.datatable_removeselectarea.md

