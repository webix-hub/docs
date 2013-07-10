onBeforeColumnDropOrder
=============


@short: fires the moment you drop the column over the target area
	

@params:

@example:
$$("datatable1").attachEvent("onBeforeColumnDropOrder", function(context, native_event){...});

@template:	api_event
@relatedapi:
	api/ui.datatable_onaftercolumndroporder_event.md
@related:
	desktop/dnd.md
    datatable/drag_and_drop.md#movingcolumns
@descr:

The drag-and-drop context can have the next properties:

- **from** - the source object
- **to** - the target object
- **source** - the id of the dragged item(s)
- **target** - the id of the drop target, null for drop on empty space
- **start** - the id from which DND was started

