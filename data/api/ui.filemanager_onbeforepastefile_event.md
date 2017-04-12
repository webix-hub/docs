onBeforePasteFile
=============

@short:
	fires when the Paste action is chosen in the popup menu

@params:

- id			string			the id of the target folder

@returns:
- result		boolean			returning false will prevent pasting

@example:
$$("fmanager").attachEvent("onBeforePasteFile", function(id){
    // your code
    return true;
});

@template:	api_event
@descr:

@relatedapi:
api/ui.filemanager_onafterpastefile_event.md
api/ui.filemanager_pastefile.md


@relatedsample:
64_file_manager/02_events/05_copy.html