onBeforeColumnDrop
=============


@short: fires the moment you drop the column to its target position

@params:

- context			object				drag-n-drop context object with a set of properties (see details)
- native_event		Event object		the native event object

@example:

$$("datatable1").attachEvent("onBeforeColumnDrop", function(context, native_event){
	// some code
    return true;
});

@relatedapi:
    api/ui.datatable_onaftercolumndrop_event.md
    api/ui.datatable_onbeforecolumndrag_event.md
@related:
	desktop/dnd.md
    datatable/drag_and_drop.md#movingcolumns


@template:	api_event
@descr:

The drag-and-drop context can have the next properties:

- **from** - the source object
- **to** - the target object
- **source** - the id of the dragged item(s)
- **target** - the id of the drop target, null for drop on empty space
- **start** - the id from which DND was started


The event is blockable. Returning false will prevent column dropping.