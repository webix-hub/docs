urlData
=============

@short: extra data that will be sent to server side along with the file uploading
	

@type: 
@example:

webix.ui({
    view:"uploader",
    urlData:{
        userid:123,
        documentid:456
    }
});


@template:	api_config

@relatedapi:api/ui.uploader_formdata_config.md

@descr:

The data will be added to the query string of POST request with file data.



