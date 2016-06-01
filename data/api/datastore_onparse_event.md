onParse
=============


@short: fires when data is ready to be processed by component
	

@params:

- driver    object    data driver (some from webix.DataDriver collection)
- data    object    data object, for json - raw json object, for xml - xml document object
    
@example:

dtable.data.attachEvent("onParse", function(driver, data){
    //for json data
    webix.message("Count of records "+data.length);
});



@template:	api_event

@relatedapi:
	api/link/dataloader_parse.md
    
@related: 
	desktop/data_loading.md#parse
	
@descr:

An alternative way of applying this event is to use the "data->" prefix in the handler.

~~~js
dtable.attachEvent("data->onParse", function(driver, data){
    //for json data
    webix.message("Count of records "+data.length);
});
~~~

The event can be used to preprocess data (but a better way is to use the [scheme](api/datastore_scheme.md) method).  
It is also a good place to read some extra attributes from incoming data.