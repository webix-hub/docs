onListBeforeSelect
=============

@short:
	fires before an item selection started

@params:
- itemId		string		the item id
- selection 	boolean		true - to select, false - to unselect
- list			object		the list that contains the item

@returns:

- state		boolean		if the event handler returns false, the item will not be selected

@example:
$$("myBoard").attachEvent("onListBeforeSelect", function(itemId,selection,list)){
    // your code
};

@template:	api_event
@descr:

@relatedapi:
api/ui.kanban_onlistafterselect_event.md

@relatedsample:
63_kanban/02_events/04_item_click.html