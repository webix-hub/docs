onBeforeDropOut
================


@short:
	fires before a dragged element is released over the droppable area

@params:
- context		object		the drag-n-drop context
- native_event		event		an HTML event object

@example: 
	
some.attachEvent("onBeforeDropOut", function(context, native_event){
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

{{note Event is similar to api/dragitem_onbeforedrop_event.md, but occurs in a drag SOURCE component, not in a drag target one}}

