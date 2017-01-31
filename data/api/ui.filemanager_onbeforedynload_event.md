onBeforeDynLoad
=============

@todo:
	complete

@short:
	fires before a request for data loading is sent to the server-side script 

@params:

- url			string		the URL of the server-side script
- folder 		object		the object of the folder to load data into (see details)
- mode 			string		the name of the dynamic loading mode
- open			?			?

@returns:
- state		boolean		false, if the operation needs to be blocked


@example:
$$("fmanager").attachEvent("onBeforeDynLoad",function(url, folder, mode, open){
    // your code
    return true;
});

@template:	api_event
@descr:

The *folder* object includes 2 properties:

- *action* - (string) the name of the dynamic loading mode
- *source* - (string) the id of the folder that requests for data

@related:
file_manager/loading_data.md#dynamicloading

@relatedapi:
api/ui.filemanager_onafterdynparse_event.md
api/ui.filemanager_onbeforedynparse_event.md
api/ui.filemanager_ondynloaderror_event.md