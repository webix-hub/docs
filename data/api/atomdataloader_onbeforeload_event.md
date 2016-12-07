onBeforeLoad
=============


@short:
occurs immediately before data loading has been started



@example: 
mygrid.attachEvent("onBeforeLoad", function(){
    webix.message("Loading...");
    return true;
});

@returns:
- result  boolean  returning <i>false</i> will prevent data loading

@template:	api_event
@relatedapi:
	api/atomdataloader_onafterload_event.md
@related:
	desktop/data_loading.md
    desktop/data_types.md
@relatedsample:
 	15_datatable/01_loading/05_load_message.html
@defined:	AtomDataLoader
	
@descr:


