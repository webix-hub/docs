onBeforeMenu
=============

@todo:
	check 

@short:
	fires before the Actions menu is opened on clicking [the Menu button](file_manager/configuration.md#menubutton)

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