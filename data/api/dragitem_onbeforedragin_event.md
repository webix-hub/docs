onBeforeDragIn
=============


@short:
	fires before a dragged element is moved over the droppable area

@params:
- context		object		the drag-n-drop context
- native_event		event		an HTML event object

@example: 
	
some.attachEvent("onBeforeDragIn", function(context, native_event){
    //... some code here ... 
});

@template:	api_event
@defined:	DragControl
@related:
	desktop/dnd.md
    desktop/dnd_events.md
@relatedapi:
	api/dragitem_onbeforedrag_event.md
    api/dragitem_ondragout_event.md
	
@descr:

The drag-and-drop context can have the next properties:

- **from** - the source object
- **to** - the target object
- **source** - the id of the dragged item(s)
- **target** - the id of the drop target, **null** for dropping on empty space
- **start** - the id from which DND was started