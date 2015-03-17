onAfterDrop
=============


@short:
	fires after drag-n-drop was finished

@params:
- context		object		the drag-n-drop context
- e		Event		a native event object
@example: 
gridb.attachEvent("onBeforeDrop", function(context, ev){
   	for (var i=0; i< context.source.length; i++){
		context.from.copy(context.source[i],context.start,this,webix.uid());
	}
	return false;
});
	
some.attachEvent("onAfterDrop", function(context, native_event){
    //... some code here ... 
});

@template:	api_event
@defined:	DragControl
@related:
	desktop/dnd.md
    desktop/dnd_events.md
@relatedapi:
	api/dragitem_onbeforedrop_event.md
    api/datamove_copy.md
@relatedsample:
	15_datatable/22_dnd/03_events.html
@descr:

The drag-and-drop context can have the next properties:

- **from** - the source object
- **to** - the target object
- **source** - the id of the dragged item(s)
- **target** - the id of the drop target, null for drop on empty space
- **start** - the id from which DND was started