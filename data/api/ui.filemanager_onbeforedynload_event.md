onBeforeDynLoad
=============

@short:
	fires before a request for data loading is sent to the server-side script 

@params:

- url			string		the URL of the server-side script
- folder 		object		the object of the folder to load data into (see details)
- mode 			string		the name of the dynamic loading mode, "files" or "branch"
- open			boolean		defines, whether the related folder should be opened after loading

@returns:
- state		boolean		false, if the operation needs to be blocked


@example:
$$("fmanager").attachEvent("onBeforeDynLoad", function(url, folder, mode, open){
    // your code
    return true;
});

@template:	api_event
@descr:

The *folder* object contains all the properties of the related folder.


@related:
file_manager/loading_data.md#dynamicloading

@relatedapi:
api/ui.filemanager_onafterdynparse_event.md
api/ui.filemanager_onbeforedynparse_event.md
api/ui.filemanager_ondynloaderror_event.md