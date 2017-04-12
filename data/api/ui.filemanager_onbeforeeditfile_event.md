onBeforeEditFile
=============

@todo: recheck updated description

@short:
	fires when the Rename action is chosen in the popup menu, but before editing started

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
api/ui.filemanager_onaftereditfile_event.md
api/ui.filemanager_onbeforeeditstop_event.md
api/ui.filemanager_onaftereditstop_event.md
api/ui.filemanager_editfile.md

@relatedsample:
64_file_manager/02_events/04_rename.html


