onBeforeAreaRemove
=============

@todo:
	check!

@short:
	fires before a select area is removed

@params:

- area_name			string			the name used to address to an area to change or to delete it

@example:
$$('dtable').attachEvent("onBeforeAreaRemove", function(name){
   // some code here
   return true;
});

@template:	api_event
@descr:
The event can be blocked. Return false to block area deleting

@relatedapi:
api/ui.datatable_onbeforeareaadd_event.md
api/ui.datatable_onafterarearemove_event.md

