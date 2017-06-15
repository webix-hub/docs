onListAfterDrop
=============

@short:
	fires after drag-n-drop has finished

@params:

- context		object		drag-n-drop context object with a set of properties (see details)
- ev			Event		a native event object
- list			object		the list object where the event has happened


@example:
$$("myBoard").attachEvent("onListAfterDrop", function(context,ev,list)){
    // your code
};

@template:	api_event
@descr:

The properties of the *context* object are:

- from - the source object
- to - the target object
- source - the ID of the dragged item(s)
- target - the ID of the drop target, null for drop on empty space
- start - the ID from which drag-n-drop started

@relatedsample:
63_kanban/02_events/03_drag_n_drop_events.html

@relatedapi:
api/ui.kanban_onlistbeforedrop_event.md

@seolinktop: [javascript ui components library](https://webix.com)
@seolink: [javascript list](https://webix.com/widget/list/)