onBeforeFileUpload
=============

@short:
	fires on the Upload action click

@params:

- targetId		string			the id of the folder where a new file will be uploaded

@example:
$$("fmanager").attachEvent("onBeforeFileUpload",function(targetId){
    // your code
    return true;
});

@returns:

- result		boolean			returning false will prevent opening the upload file dialog

@template:	api_event
@descr:

@relatedapi:
api/ui.filemanager_uploadfile.md

@related:
file_manager/configuration.md#actionsmenu