onBeforeDrag
=============


@short:
	fires before the mouse button is pressed and the cursor is moved over a draggable item

@params:
- context		object		the drag-n-drop context
- native_event		Event		an HTML event object

@returns:
- result  boolean  returning <i>false</i> will prevent dragging of the element

@example: 
	
grida.attachEvent("onBeforeDrag", function(context, native_event){
	context.html = "<div style='padding:8px;'>";
	for (var i=0; i< context.source.length; i++){
		context.html += context.from.getItem(context.source[i]).title + "<br>" ;
	}
	context.html += "</div>";
});
@template:	api_event
@defined:	DragControl
@related:
	desktop/dnd.md
    desktop/dnd_events.md
@relatedapi:
	api/dragitem_ondragout_event.md
    api/dragitem_onbeforedragin_event.md
@relatedsample:
	22_dnd/03_drag_handle.html
    15_datatable/22_dnd/03_events.html
	
@descr:
{{note
If you drag multiple items, the event will be called once, for the entire batch of items.
}}

The drag-and-drop context can have the next properties:

- **from** - the source object
- **to** - the target object
- **source** - the id of the dragged item(s)
- **target** - the id of the drop target, **null** for dropping on empty space
- **start** - the id from which DND was started