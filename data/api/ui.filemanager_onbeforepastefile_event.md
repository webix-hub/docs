onBeforePasteFile
=============

@todo:
 check the ids type and descr

@short:
	fires when the Paste action is chosen in the popup menu

@params:

- ids			string			the id of the target folder/file

@returns:
- result		boolean			returning false will prevent pasting

@example:
$$("fmanager").attachEvent("onBeforePasteFile", function(ids){
    // your code
    return true;
});

@template:	api_event
@descr:

@relatedapi:
api/ui.filemanager_pastefile.md

@relatedsample:

64_file_manager/02_events/05_copy.html