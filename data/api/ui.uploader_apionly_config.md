apiOnly
=============


@short: sets the uploader to "invisible" mode. *False* by default.
	

@type: bool
@example:

webix.ui({
	view:"uploader",
    apionly:true,
    ...//uploader config
});

@related:
	desktop/apionly_uploader.md
    
@relatedsample:
	21_upload/06_integration.html


@template:	api_config
@descr:

ApiOnly "invisible" uploader is inited for situations when you need to integrate the uploader with a UI component to upload files (picture, first and furemost) and display them in the component. 

