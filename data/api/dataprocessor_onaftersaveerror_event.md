onAfterSaveError
=============


@short: fires for data saving errors
	

@params:
- id        id      id of updated item
- status    object   update status
- response	object		server side response parsed as json object
- details	object		error details

@example: 
	
some.attachEvent("onBeforeSaveError", function(id){
    //...
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