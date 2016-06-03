onBeforeColumnDropOrder
=============


@short: fires the moment you drop the column over the target area
	

@params:

- sourceId		string				the source column id
- event			Event object		the native event object

@example:
$$("datatable1").attachEvent("onBeforeColumnDropOrder", function(from, event){
	// some code
    return true;
});

@template:	api_event
@relatedapi:
	api/ui.datatable_onaftercolumndroporder_event.md
@related:
	desktop/dnd.md
    datatable/drag_and_drop.md#movingcolumns
@descr:

The event is blockable. Returning false will prevent column dropping in case the order mode is enabled.

