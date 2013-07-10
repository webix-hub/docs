onBefore
=============


@short: fires each time before data sending of any data item
	

@params:
- id		id		id of related item
- update	object	object which holds state of data saving

@example: 
	
some.attachEvent("onBeforeUpdate", function(id, object){
    //... some code here ... 
});

@template:	api_event


	
@descr:


{{note  There is no "onBefore" event, but there is a family of similar events - "onBeforeUpdate", "onBeforeInsert", "onBeforeDelete" - based on update type one of them will be called }}