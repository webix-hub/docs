formData
=============

@short: extra data that will be sent to server side along with the file uploading
	

@type: hash
@example:

webix.ui({
	view:"uploader",
    formData:{
    	userid:123,
        document:"attachment"
    }
});


@template:	api_config
@relatedapi:api/ui.uploader_urldata_config.md
@descr:

The data will be added to the body of POST request with file data. 


