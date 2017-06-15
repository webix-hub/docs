onBeforeColumnDrag
=============


@short: 
	fires the moment you start dragging the column from its source position
	
@params:

- sourceId			string					the source column id
- event				Event object			the native event object
    
@example:
$$("datatable1").attachEvent("onBeforeColumnDrag", function(sourceId, event){
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







@seolinktop: [html5 library](https://webix.com)
@seolink: [html5 datatable](https://webix.com/widget/datatable/)