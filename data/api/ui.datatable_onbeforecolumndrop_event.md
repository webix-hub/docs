onBeforeColumnDrop
=============


@short: fires the moment you drop the column to its target position

@params:

- sourceId			string				the source column id
- targetId			string				the target column id
- event				Event object		the native event object

@example:

$$("datatable1").attachEvent("onBeforeColumnDrop", function(from, to, event){
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

The event is blockable. Returning false will prevent column dropping.