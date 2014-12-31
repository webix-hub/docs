onAfterSave
=============

@short: fires after serverside responce has been received and processed

@params:
- response	object	json object with details of server side response
- id		id		id of related item
- update	object	object which holds state of data saving
	

@example:
dp.attachEvent("onAfterSave", function(obj, id, update){
	//code
});

@relatedapi:
	api/dataprocessor_onaftersave_event.md
@related:
	desktop/dataprocessor.md
    
@template:	api_event

@descr:
In case of an error during saving, the api/dataprocessor_onaftersaveerror_event.md fires instead.

