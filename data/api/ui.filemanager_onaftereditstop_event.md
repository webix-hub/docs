onAfterEditStop
=============


@short:
	fires after the editor is closed

@params:
- id			string			the id of the edited item
- state			object			contains two properties: old - the old value and new - the new value
- editor		object			editor object
- view			string			the view where editing occurs

@example:
$$("fmanager").attachEvent("onAfterEditStop",function(id,state,editor,view){
    // your code
});

@template:	api_event
@descr:


@relatedsample:
64_file_manager/02_events/04_rename.html

@relatedapi:
api/ui.filemanager_onbeforeeditstop_event.md
api/ui.filemanager_onbeforeeditfile_event.md
api/ui.filemanager_onaftereditfile_event.md
api/ui.filemanager_editfile.md





