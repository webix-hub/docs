onAfterStatusChange
=============

@short:
	fires after an item has been dropped into the list with a different status

@params:

- itemId		string			the item id
- status		string			a new item's status
- list			object			the list object where the event has happened
- context 		object			drag-n-drop context object
- ev			Event 			a native event object

@example:
$$("myBoard").attachEvent("onListAfterDrop", function(itemId,newStatus)){
    // your code
};

@template:	api_event
@descr:

@relatedapi:
api/ui.kanban_onbeforestatuschange_event.md