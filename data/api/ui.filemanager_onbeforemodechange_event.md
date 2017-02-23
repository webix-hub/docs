onBeforeModeChange
=============

@short:
	fires before the mode of viewing files is changed on clicking the <a href="file_manager/configuration.md#modes">Modes button</a>
	

@params:

@returns:

- result		boolean			returning false will prevent the operation



@example:

@example:
$$("fmanager").attachEvent("onBeforeModeChange", function(){
    // your code
    return true;
});


@template:	api_event
@descr:

@related:
file_manager/configuration.md#filesandtable


@relatedapi:

api/ui.filemanager_onaftermodechange_event.md





