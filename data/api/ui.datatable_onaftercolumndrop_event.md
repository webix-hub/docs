onAfterColumnDrop
=============


@short: fires after the column has been dragged and dropped to the target position
	

@params:

- sourceId		string				the source column id
- targetId		string    			the target column id
- event			Event object		the native event object

@example:
$$("datatable1").attachEvent("onAfterColumnDrop", function(from, to, event){...});

@template:	api_event
@related: 
	desktop/dnd.md
    datatable/drag_and_drop.md#movingcolumns
@relatedapi:
	api/ui.datatable_onbeforecolumndrop_event.md
    api/ui.datatable_onbeforecolumndrag_event.md


    
@descr:












