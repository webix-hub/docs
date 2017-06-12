reject
=============


@short:
	creates and  rejects a promise 

@params:
- reason		any		the reason why the promise is rejected

@returns:
- obj	object		rejected promise	


@example:

webix.promise.reject("Incorrect value").then(
	function(success){ /*not called*/ }, 
    function(){ 
		console.log(error); //"Incorrect value"
	}
);

webix.promise.reject("Incorrect value").fail(function(error){
   console.log(error); //"Incorrect value"
});



@template:	api_method
@descr:

