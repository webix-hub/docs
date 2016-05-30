onBeforeColumnDrag
=============


@short: 
	fires the moment you start dragging the column from its source position
	
@params:

- from			object					the source object
- event			Event object			the native event object
    
@example:
$$("datatable1").attachEvent("onBeforeColumnDrag", function(from, event){
	// some code
	return true;
});


@template:	api_event
@related: 
	desktop/dnd.md
    datatable/drag_and_drop.md#movingcolumns
@relatedapi:
	api/ui.datatable_onbeforecolumndrop_event.md
    api/ui.datatable_onaftercolumndrop_event.md

@descr:
The event is blockable. Returning false will prevent column dragging.





