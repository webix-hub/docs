@link:api/dragorder_onbeforedroporder_event.md

@params:
- itemId	id		the dragged item id		
- tInd		number		the index of the row, where the item was dropped (if target is the last position, i.e. an empty space, the index will be -1)
- event		Event 		the native event object
- details 	object		the object which contains the <b>parent</b> property - id of the branch where dragging is taking place


@example:
$$("dtable1").attachEvent("onBeforeDropOrder",function(itemId,tInd,event,details){
    // some code 
    return true;
});

@seolinktop: [ui widget library](https://webix.com)
@seolink: [html5 datatable](https://webix.com/widget/datatable/)