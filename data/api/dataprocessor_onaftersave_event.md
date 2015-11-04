onAfterSave
=============

@short: fires after serverside response has been received and processed

@params:
- response	object	json object with details of server side response
- id		id		id of related item
- details	object	object which holds details of data saving
	

@example:
dp.attachEvent("onAfterSave", function(response, id, details){
	//code
});

@relatedapi:
	api/dataprocessor_onaftersave_event.md
@related:
	desktop/dataprocessor.md
    
@template:	api_event

@descr:

1 . The **response** parameter contains the following info about saved data item:

- **id** - old ID (clientside);
- **newid** - new ID (serverside);
- **sid** - old ID (clientside);
- **tid** - new ID (serverside);
- **status** - status of the operation ("insert", "update", "delete");
- **type** - operation type ("insert", "update", "delete");
- **value** - saved data value.

2 . The **id** parameter contains old (clientside) item ID. It will differ from the serverside one in case of insertion. 

3 . The **details** parameter contains data saving details, namely: 

- **data** - object with the information about the action performed;
- **loader** - Ajax loader object;
- **text** - full text of serverside response.

In case of an **error** during saving, the api/dataprocessor_onaftersaveerror_event.md fires instead.

