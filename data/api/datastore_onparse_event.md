onParse
=============


@short: fires when data is ready to be processed by component
	

@params:

- driver    object    data driver (some from webix.DataDriver collection)
- data    object    data object, for json - raw json object, for xml - xml document object
    
@example:

dtable.attachEvent("onParse", function(driver, data){
    //for json data
    webix.message("Count of records "+data.length);
});



@template:	api_event

@relatedapi:
	api/link/dataloader_parse.md
    
@related: 
	desktop/data_loading.md#parse
	
@descr:

event can be used to preprocess data ( but usage of [scheme](api/datastore_scheme.md) is the better way )  
also, this is good place to read some extra attributes from incoming data