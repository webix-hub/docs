onBeforeBack
=============

@short:
	fires before the Filemanager "back" button has been clicked

@params:

@returns:

- result		boolean			returning false will prevent the operation


@example:
$$("fmanager").attachEvent("onBeforeBack",function(){
    // your code
    return true;
});

@template:	api_event
@descr:

@relatedapi:
api/ui.filemanager_onafterback_event.md