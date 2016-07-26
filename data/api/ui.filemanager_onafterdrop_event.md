onAfterDrop
=============

@short:
	fires after drag-n-drop has been finished

@params:
- context		object				drag-n-drop context object 
- ev 			Event object		a native event object


@example:
$$("fmanager").attachEvent("onAfterDrop",function(context,ev){
    // your code
});

@template:	api_event
@descr:
The properties of the context object are:

- from - (object) the source object
- to - (object) the target object
- source - (array) the ID of the dragged item(s)
- target - (string) the ID of the drop target, null for drop on empty space
- start - (string) the ID from which DnD started

@relatedsample:
64_file_manager/02_events/03_drag.html

@relatedapi:
api/ui.filemanager_onbeforedrop_event.md