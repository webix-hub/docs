onBeforeDrop
=============


@short:
	fires before a dragged element is released over the droppable area

@params:
- context		object		the drag-n-drop context
- native_event		Event		an HTML event object

@returns:
- result  boolean  returning <i>false</i> will prevent further drag-and-drop processing

@example: 
	
some.attachEvent("onBeforeDrop", function(context, native_event){
    //... some code here ... 
    //return false to block operation
    return true;
});

@template:	api_event
@defined:	DragControl
@related:
	desktop/dnd.md
    desktop/dnd_events.md
@relatedapi:
	api/dragitem_onafterdrop_event.md
@relatedsample:
	15_datatable/22_dnd/03_events.html
	
@descr:
{{note
If you drag multiple items, the event will be called once, for the entire batch of items.
}}
The drag-and-drop context can have the next properties:

- **from** - the source object
- **to** - the target object
- **source** - the id of the dragged item(s)
- **target** - the id of the drop target, null for drop on empty space
- **start** - the id from which DND was started
