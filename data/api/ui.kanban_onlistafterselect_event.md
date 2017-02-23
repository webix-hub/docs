onListAfterSelect
=============

@short:
	fires after an item has been selected

@params:
- itemId	string		the item id
- list		object		the list that contains the item


@example:
$$("myBoard").attachEvent("onListAfterSelect", function(itemId,list)){
    // your code
};

@template:	api_event
@descr:

@relatedsample:
63_kanban/02_events/04_item_click.html

@relatedapi:
api/ui.kanban_onlistbeforeselect_event.md