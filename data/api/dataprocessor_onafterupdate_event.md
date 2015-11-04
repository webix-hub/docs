onAfterUpdate
=============


@short: fires after successfull data insertion
	

@params:
- response	object	json object with details of server side response
- id		id		old id of related item
- details	object	object which holds state of data saving

@example: 
	
dp.attachEvent("onAfterUpdate", function(response, id, object){
    //... some code here ... 
});

@template:	api_event

	
@descr:

@descr:

1 . The **response** parameter contains the following info about saved data item:

- **id** - old ID (clientside);
- **newid** - new ID (serverside);
- **sid** - old ID (clientside);
- **tid** - new ID (serverside);
- **status** - status of the operation ("update");
- **type** - operation type ("update");
- **value** - saved data value.

2 . The **id** parameter contains old (clientside) item ID.

3 . The **details** parameter contains data saving details, namely: 

- **data** - object with the information about the action performed;
- **loader** - Ajax loader object;
- **text** - full text of serverside response.

Will not fire for "error" or "invalid" responses.

If server side response with custom type - custom event will be called.

~~~js
//for such response
{ id:"123", status:"custom" }
//the onAfterCustom event will be called
~~~