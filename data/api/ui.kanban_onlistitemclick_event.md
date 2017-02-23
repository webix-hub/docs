onListItemClick
=============

@short:
	fires on an item click

@params:

- itemId		string				the id of the clicked item
- ev			Event 				a native event object
- node			HTMLElement			the target HTML element
- list			object				the list object where click has happened

@example:
$$("myBoard").attachEvent("onListIconClick", function(itemId,ev,node,list)){
    // your code
};

@template:	api_event
@descr:

@relatedsample:
63_kanban/02_events/04_item_click.html

@relatedapi:
api/ui.kanban_onlistitemdblclick_event.md