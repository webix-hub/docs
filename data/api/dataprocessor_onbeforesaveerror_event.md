onBeforeSaveError
=============


@short: fires for data saving errors
	

@params:
- id        id      id of updated item
- status    object   update status
- response	object		server side response parsed as json object
- details	object		error details

@returns:

- status    bool    return true to ignore the error and mark item as saved
@example: 
	
dp.attachEvent("onBeforeSaveError", function(id){
    return true;
});

@template:	api_event
@descr:


Structure of status
~~~js
{
   id:"id of item",
   status:"update status",
   newid:"new id after operation"
}
~~~


Structure of details
~~~js
{
   text:"full text of server side response",
   data:"webix ajax data related to the error",
   loader:"xmlHttpRequest object related to the error"
}
~~~