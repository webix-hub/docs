onDataRequest
=============


@short: fires when data from the server side is requested (part of dynamic loading)

@params:
- start    number    the position which data starts to be loaded from
- count    number    the count of records that need loading
* callback    function    the method called after data loading
* url    string    the data url

@example:
dtable.attachEvent("onDataRequest", function(start, count){
    var data = custom_load_data(start, count);
    dtable.parse(data, "json");
));

@related:
	desktop/serverside.md
    desktop/dynamic_loading.md

@template:	api_event
@descr:

Dynamic loading for plain structure is triggered during scrolling and paging. 

The component will use the datasource specified by its 
api/atomdataloader_url_config.md property or in the 
api/atomdataloader_load.md method with extra parameters. 

