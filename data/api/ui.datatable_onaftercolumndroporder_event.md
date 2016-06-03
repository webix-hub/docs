onAfterColumnDropOrder
=============


@short: fires after the column order was changed with the help of drag-and-drop
	
@params:

- sourceId		string				the source column id
- targetId		string				the target column id
- node			HTML element		the target HTML element

@example:
$$("datatable1").attachEvent("onAfterColumnDrop", function(from, to, node){...});

@template:	api_event
@related: 
	desktop/dnd.md
    datatable/drag_and_drop.md#movingcolumns
@relatedapi:
    api/ui.datatable_onbeforecolumndroporder_event.md

@descr:








