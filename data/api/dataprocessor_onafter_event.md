onAfter
=============


@short: fires each time after successfull data saving
	

@params:
- response	object	json object with details of server side response
- id		id		id of related item
- update	object	object which holds state of data saving

@example: 
	
some.attachEvent("onAfter", function(response, id, object){
    //... some code here ... 
});

@template:	api_event


	
@descr:


{{note  There is no "onAfter" event, but there is a family of similar events - "onAfterUpdate", "onAfterInsert", "onAfterDelete" - based on update type one of them will be called }}

Will not fire for "error" or "invalid" responses  

If server side response with custom type - custom event will be called

~~~js
//for such response
{ id:"123", status:"custom" }
//the onAfterCustom event will be called
~~~

