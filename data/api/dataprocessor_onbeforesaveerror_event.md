onBeforeSaveError
=============


@short: fires for data saving errors
	

@params:
- id        string      id of updated item
- status    string   	update status
- response	object		server side response parsed as JSON object
- details	object		error details

@returns:

- status    boolean    return true to ignore the error and mark item as saved

@example: 
	
dp.attachEvent("onBeforeSaveError", function(id, status, response, details){
    return true;
});

@template:	api_event
@descr:


The structure of the *response* object:

~~~js
{
   id:"id of the item",
   status:"update status",
   newid:"new id after operation"
}
~~~


The structure of the *details* object:

~~~js
{
   text:"full text of server side response",
   data:"webix ajax data related to the error",
   loader: xhr // xmlHttpRequest object related to the error
}
~~~

@relatedapi:api/dataprocessor_onaftersaveerror_event.md