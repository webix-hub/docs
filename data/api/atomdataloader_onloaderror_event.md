onLoadError
=============


@short: fires when an error occurs during data loading ( invalid server side response )
	

@params:
- text    string    the server side response as plain text
- xml    object    an xml object ( may be null if XML data was corrupted )
- xhr    object    an xhr object

@example:
dtable.attachEvent("onLoadError", function(text,xml,xhr){
    webix.message("Loading error");
));

@related:
	desktop/loadingerror.md
    desktop/data_loading.md

@template:	api_event
@descr:

The event occurs after XML loading is complete.