onListItemDblClick
=============

@short:
	fires when an item has been double-clicked

@params:

- itemId	string		 	the id of the clicked item
- ev		Event 		 	a native event object
- node		HTMLElement		the target HTML element
- list		object			the list object where double-click has happened

@example:
$$("myBoard").attachEvent("onListItemDblClick", function(itemId,ev,node,list)){
    // your code
};

@template:	api_event
@descr:

@relatedsample:
63_kanban/02_events/05_dbl_click.html

@relatedapi:
api/ui.kanban_onlistitemclick_event.md

@seolinktop: [popular javascript framework](https://webix.com)
@seolink: [object list javascript](https://webix.com/widget/list/)