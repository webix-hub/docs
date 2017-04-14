defer
=============

@short: creates a new instance of a deferred object (a `promise`)
	
    
@returns:
promise		promise	 	'promise' object	

@params:

@example:

function getData(url){
	//create deferred promise
	var promise = webix.promise.defer();
    
    webix.ajax().get(url).then(function(res){
       //resolve deferred promise
       promise.resolve(res);
    });
    
    return promise;
}

getData(url).then(function(data){
	//some actions with data
});



@template:	api_method
@descr:

