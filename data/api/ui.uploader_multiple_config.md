multiple
=============


@short: enables uploading of several files at a time. *True* by default. 
	
@type: bool
@example:

webix.ui({
	view:"uploader",
    multiple:false,
    ...//uploader config
});
    
@relatedsample:
	21_upload/08_single_upload.html

@template:	api_config
@descr:

Is this property is set to *false* value, any newly added file will replace the one in the uploader body. Only one file at a time can be addaed for upload.

Single file upload is useful in combination with cancelled [autosend](api/ui.uploader_autosend_config.md). 



