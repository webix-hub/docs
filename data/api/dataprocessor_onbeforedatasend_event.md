onBeforeDataSend
=============


@short: called before sending data to server side
	

@params:
- obj		object		data object
- id		string, number		ID of a data item
- operation		string, number		operation name ("update, "insert", "delete")

@example: 
	
some.attachEvent("onBeforeDataSend", function(obj, id, operation){
    //... some code here ... 
});

@template:	api_event

@relatedapi:
	api/dataprocessor_onafterdatasend_event.md
    desktop/dataprocessor.md
	
@descr:


