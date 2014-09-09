onAfterDataSend
=============

@short: fires the moment data has gone to server
	
@params:
- obj		object		data object
- id		string, number		ID of a data item
- operation		string, number		operation name ("update, "insert", "delete")

@example:
//dp is a dataprocessor object
dp.attachEvent("onAfterDataSend", function(obj, id, operation){
	//code
});

@related:
	desktop/dataprocessor.md
@relatedapi:
	api/dataprocessor_onbeforedatasend_event.md
@template:	api_event
@descr:

