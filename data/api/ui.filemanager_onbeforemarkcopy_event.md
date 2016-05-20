onBeforeMarkCopy
=============

@todo: check the ids type

@short:
	fires before an item has been marked for copying

@params:

- ids		string		the ids of the items to copy

@returns:
- result		boolean		returning false will prevent copying


@example:

$$("files").attachEvent("onBeforeMarkCopy", function(ids){
    // your code
    return true;
});


@template:	api_event
@descr:

@relatedapi:
api/ui.filemanager_markcopy.md

@relatedsample:
64_file_manager/02_events/05_copy.html