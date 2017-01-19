onListIconClick
=============

@short:
	fires on clicking any icon in the list item

@params:

- iconId		string			the id of the icon
- itemId		string			the id of the clicked item
- ev			Event 			a native event object
- node			HTMLElement		the target HTML element
- list			object			the list object where click has happened

@returns:

- state		boolean		 if the event handler returns false, the onListItemClick handler will not be called

@example:
$$("myBoard").attachEvent("onListIconClick", function(iconId, itemId,ev,node,list)){
    // your code
    return false;
};

@template:	api_event
@descr:

@relatedsample:
63_kanban/02_events/01_icon_onclick.html