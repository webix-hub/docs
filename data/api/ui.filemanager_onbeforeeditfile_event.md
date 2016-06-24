onBeforeEditFile
=============

@short:
	fires when the Rename action is chosen in the popup menu

@params:
- id		string		the id of the edited item

@returns:

- result		boolean			if an event handler returns false, the onBeforeEditFile handler will not be called


@example:
$$("fmanager").attachEvent("onBeforeEditFile",function(id){
    // your code 
    return true;
});

@template:	api_event
@descr:

@relatedapi:
api/ui.filemanager_renamefile.md