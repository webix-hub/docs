onAvatarClick
=============

@short:
	fires on clicking an avatar in the item

@params:

- itemId		string			the id of the clicked item
- ev			Event 			a native event object
- node			HTMLElement		the target HTML element
- list			object			the list object where click has happened

@returns:

- state			boolean 	    if the event handler returns false, onListItemClick will not be called

@example:
$$("myBoard").attachEvent("onAvatarClick", function(itemId,ev,node,list)){
    // your code
};

@template:	api_event
@descr:

@relatedsample:
63_kanban/02_events/02_avatar_onclick.html
