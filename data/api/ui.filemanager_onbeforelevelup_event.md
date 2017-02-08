onBeforeLevelUp
=============

@todo:
	check 

@short:
	fires before the [LevelUp](file_manager/configuration.md#levelup) button is clicked (before selection is moved to the parent folder)

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
