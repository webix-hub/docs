onBeforeLevelDown
=============

@short:
	fires before selection is moved to the child folder

@params:

- id		string			the new selected folder id

@returns:

- result		boolean			returning false will prevent the operation


@example:
fmanager.attachEvent("onBeforeLevelDown", function(){
	// some code
    return true;
});

@template:	api_event
@descr:

@relatedapi:
api/ui.filemanager_onafterleveldown_event.md
