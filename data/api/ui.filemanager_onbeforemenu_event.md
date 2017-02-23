onBeforeMenu
=============

@short:
	fires before the Actions menu is opened on clicking the <a href="file_manager/configuration.md#menubutton">Menu button</a>

@params:


@returns:

- result		boolean			returning false will prevent the operation

@example:
$$("fmanager").attachEvent("onBeforeMenu", function(){
    // your code
    return true;
});


@template:	api_event
@descr:

@related:
file_manager/configuration.md#actionsmenu

@relatedapi:
api/ui.filemanager_onaftermenu_event.md