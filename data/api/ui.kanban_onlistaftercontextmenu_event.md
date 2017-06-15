onListAfterContextMenu
=============

@short:
	fires after the context menu was called in the item area

@params:

- itemId		string			the id of the clicked item
- ev			Event			a native event object
- node			HTMLElement		the target HTML element
- list			object			the list object where click was happened


@example:
$$("myBoard").attachEvent("onListAfterContextMenu", function(itemId,ev,node,list)){
    // your code
};

@template:	api_event
@descr:

@relatedapi:
api/ui.kanban_onlistbeforecontextmenu_event.md

@seolinktop: [javascript web framework](https://webix.com)
@seolink: [object list javascript](https://webix.com/widget/list/)