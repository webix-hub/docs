onListBeforeDrag
=============

@short:

fires before the mouse button is pressed and the cursor is moved over a draggable item

@params:

- context		object		drag-n-drop context object with a set of properties (see details)
- ev			Event 		a native event object
- list 			object		the list object where the event has happened


@returns:

- state		boolean		returning false will prevent dragging of the element

@example:
$$("myBoard").attachEvent("onListBeforeDrag", function(context,ev,list)){
    if(...){
        return false;
    }
    return true;
};

@template:	api_event
@descr:

The properties of the context object are:

- from - the source object
- to - the target object
- source - the ID of the dragged item(s)
- target - the ID of the drop target, null for drop on empty space
- start - the ID from which drag-n-drop started

@relatedsample:
63_kanban/02_events/03_drag_n_drop_events.html

@seolinktop: [js framework](https://webix.com)
@seolink: [javascript library list](https://webix.com/widget/list/)