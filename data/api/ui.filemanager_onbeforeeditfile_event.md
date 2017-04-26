onBeforeEditFile
=============

@short:
	fires when the Rename action is chosen in the popup menu, but before editing started

@params:
- id		number|string		the id of the edited item


@example:
$$("fmanager").attachEvent("onBeforeEditFile", function(id){
    // your code
});

@template:	api_event
@descr:

Returning *false* within the handler function will prevent the execution of the further logic and the related editor will not be opened. 

@relatedapi:
api/ui.filemanager_onaftereditfile_event.md
api/ui.filemanager_onbeforeeditstop_event.md
api/ui.filemanager_onaftereditstop_event.md
api/ui.filemanager_editfile.md

@relatedsample:
64_file_manager/02_events/04_rename.html


