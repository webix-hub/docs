onBeforeDropOrder
=============

@short: 
	called when dnd reording has been made, but not applied yet


@params:

- itemId				string/number		the item id		
- targetInd				number				the index of the row, where the item was dropped (if target is the last position, i.e. an empty space, the index will be -1)
- event					Event object		the native event object
- details 				object				the object which contains the <b>parent</b> property - id of the branch where dragging is taking place

	
@example:
$$("myform").attachEvent("onBeforeDropOrder", function(itemId,targetInd,event,details){
    // some code 
    return true;
});

@template:	api_event
@descr:

The event is blockable. Returning false will prevent an item's dropping.