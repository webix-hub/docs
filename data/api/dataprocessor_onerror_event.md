onError
=============


@short: fires for data saving errors which result in error
	

@params:
- obj		object		response object
- update	object		inner object, which holds state of the data saving

@example: 
	
some.attachEvent("onError", function(obj, update){
    //... some code here ... 
});

@template:	api_event
@descr:


Valid service response, which informs that server side operation failed