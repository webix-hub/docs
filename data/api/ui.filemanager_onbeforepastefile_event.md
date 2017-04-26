onBeforePasteFile
=============

@short:
	fires when the Paste action is chosen in the popup menu

@params:

- id			string			the id of the target folder

@example:
$$("fmanager").attachEvent("onBeforePasteFile", function(id){
    // your code
});

@template:	api_event
@descr:

Returning false within the handler function will prevent the execution of the further logic and file will not be pasted.

@relatedapi:
api/ui.filemanager_onafterpastefile_event.md
api/ui.filemanager_pastefile.md


@relatedsample:
64_file_manager/02_events/05_copy.html