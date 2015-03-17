addDropZone
=============

@short: adds uploader drop zone to any HTML element of the page	

@params:
- element	HTMLElement	HTML element


@example:
$$("uploadAPI").addDropZone($$("mylist").$view);

@relatedsample:
	21_upload/09_integration_to_element.html
@relatedapi:
	api/ui.uploader_apionly_config.md
@related:
	desktop/apionly_uploader.md#usingapiolyuploaderfordragndrop
@template:	api_method
@descr:
	
By default, you can drop files over the upload button. 

This method allows defining any area as **uploader drop zone** while 
the uploader itself is set to [apiOnly](api/ui.uploader_apionly_config.md).

