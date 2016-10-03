onBeforeMarkCut
=============


@short:
	fires before an item has been marked for cutting

@params:
- ids		string,array		the ids of the items to cut

@returns:
- result		boolean			returning false will prevent the cutting operation

@example:
$$("files").attachEvent("onBeforeMarkCut", function(ids){
    // your code
    return true;
});

@template:	api_event
@descr:

@relatedsample:
64_file_manager/02_events/05_copy.html

@relatedapi:
api/ui.filemanager_markcut.md