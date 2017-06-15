onListBeforeDragIn
=============

@short:
	fires before a dragged element is moved over the droppable list

@params:

- context		object		drag-n-drop context object with a set of properties (see details)
- ev			Event 		a native event object
- list			object		the list object where the event has happened

@returns:

- state		boolean		returning false will prevent dropping of the element

@example:
$$("myBoard").attachEvent("onListBeforeDragIn", function(context,ev,list)){
    if(...){
        return false;
    }
    return true;
};

@template:	api_event
@descr:
The properties of the *context* object are:

- from - the source object
- to - the target object
- source - the ID of the dragged item(s)
- target - the ID of the drop target, null for drop on an empty space
- start - the ID from which drag-n-drop started

@relatedsample:
63_kanban/02_events/03_drag_n_drop_events.html

@seolinktop: [easy javascript framework](https://webix.com)
@seolink: [javascript list](https://webix.com/widget/list/)