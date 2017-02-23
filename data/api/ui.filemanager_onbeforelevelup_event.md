onBeforeLevelUp
=============


@short:
	fires before the <a href="file_manager/configuration.md#levelup">LevelUp</a> button is clicked (before selection moves to the parent folder)

@params:

@returns:

- result		boolean			returning false will prevent the operation



@example:
fmanager.attachEvent("onBeforeLevelUp", function(){
    // some code
    return true;
});

@template:	api_event
@descr:


@relatedapi:
api/ui.filemanager_onafterlevelup_event.md


@related:
file_manager/configuration.md#levelup
