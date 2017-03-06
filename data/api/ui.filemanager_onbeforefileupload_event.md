onBeforeFileUpload
=============

@short:
	fires before the uploader has started to upload a file

@params:

- file_config		object			an object with the file configuration

@example:
$$("fmanager").attachEvent("onBeforeFileUpload",function(file_config){
    // your code
    return true;
});

@returns:

- result		boolean			returning false will prevent file uploading

@template:	api_event
@descr:


