onAfterDropOrder
=============

@short: called when dnd reordering is fully finished

@params:
- itemId			string/number		the dragged item id
- targetInd			number				the index of the row, where the item was dropped (if target is the last position, i.e. an empty space, the index will be -1)
- event				Event object		the native event object
	
@example:
$$("myform").attachEvent("onAfterDropOrder", function(itemId, targetInd, event){
    // some code
});

@template:	api_event
@descr:
