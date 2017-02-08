onBeforeStatusChange
=============

@short:
	fires before an item is going to be dropped into the list with different status

@params:

- itemId		string		the item's id
- status		string		a new item's status
- list			object		the list object where the event has happened
- context		object		drag-n-drop context object
- ev 			Event		a native event object


@example:
$$("myBoard").attachEvent("onBeforeStatusChange", function(itemId,newStatus)){
    var status = this.getItem(itemId).status;
    if(...){
        return false;
    }
    return true;
};

@returns:
- state		boolean			returning false will prevent further drag-and-drop processing

@template:	api_event
@descr:

@relatedapi:
api/ui.kanban_onafterstatuschange_event.md