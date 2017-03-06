onBeforeUploadFile
=============

@todo:
	check 

@short:
	fires on the Upload action click, before the file dialog has opened

@params:

- targetId		string			the id of the folder where a new file will be uploaded

@example:
$$("fmanager").attachEvent("onBeforeUploadFile",function(targetId){
    // your code
    return true;
});

@returns:

- result		boolean			returning false will prevent opening the file dialog

@template:	api_event
@descr:

@relatedapi:
api/ui.filemanager_onafteruploadfile_event.md
api/ui.filemanager_onbeforefileupload_event.md
api/ui.filemanager_uploadfile.md

