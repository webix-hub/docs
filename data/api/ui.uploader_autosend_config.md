autosend
=============


@short: enable seding files to server immediately after they have been added to uploader. *True* by default. 


@type: boolean
@example:

webix.ui({
	view:"uploader",
    autosend:false,
    ...//uploader config
});
    
@relatedsample:
	21_upload/03_manual_send.html
@related:
	desktop/uploader_integration.md
	

@template:	api_config
@descr:

The default autosend mode is not recommended for forms where attached files should be saved together with other form values. 

Cancelling autosending allows users to looks through the files ready for uploading before sending them to server to avoid human errors.  



