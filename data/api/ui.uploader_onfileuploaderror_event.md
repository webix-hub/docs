onFileUploadError
=============

@short: fires in case of serverside error during uploading

@params:

- item 	object	file data
- response	object	serverside response (if any)
	

@example:

$$("uploader1").attachEvent("onFileUploadError", function(item, response){
	//code
});

@relatedapi:
	api/ui.uploader_onuploadcomplete_event.md
    api/ui.uploader_onfileupload_event.md
@related:
	desktop/file_upload.md
	desktop/apionly_uploader.md
@relatedsample:
	21_upload/06_integration.html
@template:	api_event
@descr:

The events fires only when serverside response contains **error** status, like:

~~~php
echo "{ status:'error' }";
~~~