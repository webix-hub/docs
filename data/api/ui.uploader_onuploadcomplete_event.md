onUploadComplete
=============


@short: fires when all files have been successfully uploaded to server
	
@example:
$$("upl1").attachEvent("onUploadComplete", function(response){
	webix.message("done");
});

@params:
- response 	object	serverside response (if any)

@relatedapi:
	api/ui.uploader_onfileupload_event.md
@related:
	desktop/file_upload.md
@relatedsample:
	21_upload/03_manual_send.html

@template:	api_event
@descr:

The event takes serverside response as parameter. 

If you tune you uploading script to return a response like 

{{snippet
PHP response
}}
~~~php
//$sname - file save name
echo "{ status: 'server', sname:'$sname'}";
~~~

you can get it on the client side: 

~~~js
$$("upl1").attachEvent("onUploadComplete", function(response){
	webix.message(response.status);
});
~~~