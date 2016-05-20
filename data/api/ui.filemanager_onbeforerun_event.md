onBeforeRun
=============

@todo:
	check

@short:
	fires before a file is run

@params:

- id		string			the file id

@returns:

- result		boolean			returning false will prevent file running


@example:
fmanager.attachEvent("onBeforeRun", function(id){
	// code here
    return true;
});

@template:	api_event
@descr:

@relatedapi:
api/ui.filemanager_onafterrun_event.md

@relatedsample:
64_file_manager/02_events/02_download.html