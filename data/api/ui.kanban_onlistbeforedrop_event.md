onListBeforeDrop
=============

@short:
	fires before a dragged element is released over the droppable list

@params:

- context		object		drag-n-drop context object with a set of properties (see details)
- ev			Event 		a native event object
- list			object		the list object where the event has happened

@returns:

- state		boolean		returning false will prevent further drag-and-drop processing

@example:
$$("myBoard").attachEvent("onListBeforeDrop", function(context,ev,list)){
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
- target - the ID of the drop target, null for drop on empty space
- start - the ID from which drag-n-drop started


@relatedapi:
api/ui.kanban_onlistafterdrop_event.md

@seolinktop: [javascript component library](https://webix.com)
@seolink: [object list javascript](https://webix.com/widget/list/)