onListBeforeContextMenu
=============

@short:
	fires on an item right click, before the native context menu is displayed

@params:
- itemId		string			the id of the clicked item
- ev			Event 			a native event object
- node			HTMLElement		the target HTML element
- list			object			the list object where click has happened

@example:
$$("myBoard").attachEvent("onListBeforeContextMenu", function(itemId,ev,node,list)){
    // your code
 
    // block native context menu
    webix.html.preventEvent(ev);
};

@template:	api_event
@descr:

@relatedsample:
63_kanban/02_events/06_context.html

@relatedapi:
api/ui.kanban_onlistaftercontextmenu_event.md