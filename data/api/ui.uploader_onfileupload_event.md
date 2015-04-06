onFileUpload
=============

@short: fires the moment file uploading ends

@params:

- item 	object	file data
- response	object	serverside response (if any)
	

@example:

$$("uploader1").attachEvent("onFileUpload", function(item, response){
	//code
});

@relatedapi:
	api/ui.uploader_onuploadcomplete_event.md
    api/ui.uploader_onfileuploaderror_event.md
@related:
	desktop/file_upload.md
	desktop/apionly_uploader.md
@relatedsample:
	21_upload/06_integration.html
@template:	api_event
@descr:


