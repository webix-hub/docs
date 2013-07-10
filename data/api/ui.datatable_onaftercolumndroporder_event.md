onAfterColumnDropOrder
=============


@short: fires after the column order was changed with the help of drag-and-drop
	

@example:
$$("datatable1").attachEvent("onAfterColumnDrop", function(context, native_event){...});

@template:	api_event
@related: 
	desktop/dnd.md
    datatable/drag_and_drop.md#movingcolumns
@relatedapi:
    api/ui.datatable_onbeforecolumndroporder_event.md

@descr:

The drag-and-drop context can have the next properties:

- **from** - the source object
- **to** - the target object
- **source** - the id of the dragged item(s)
- **target** - the id of the drop target, null for drop on empty space
- **start** - the id from which DND was started






