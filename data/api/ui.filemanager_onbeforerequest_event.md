onBeforeRequest
=============

@todo:
	check 

@short:
	fires before any request is sent to the server-side script

@params:

- url		string		the URL of the server-side script
- folder 	object		the object of the folder to load data into (see details)

@returns:

- result		boolean			returning false will prevent the operation

@example:
$$("fmanager").attachEvent("onBeforeRequest",function(url, folder){
    // your code
    return true;
});

@template:	api_event
@descr:
The *folder* object includes several properties, depending on the type of operation. 
Detailed description of possible operations and related request and response parameters is given [here](file_manager/loading_data.md#requestsandresponsesfordifferentoperations)


@related:
file_manager/loading_data.md#requestsandresponsesfordifferentoperations

