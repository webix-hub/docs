all
=============

@short: resolves all promises in the result array
	
@params:
- promise		promise		'promise' object
* morepromises	promise		'promise' object(s)

@example:

a = webix.ajax("someA.php");
b = webix.ajax("someB.php");
c = webix.ajax("someC.php");
 
 
webix.promise.all([ a,b,c ]).then(function(results){
    var a_result = results[0];
    var b_result = results[1];
    var c_result = results[3];
    // do something
});

@template:	api_method
@descr:

The function is executed when callbacks have been received from all of the requests for which 'promise' objects have been passed into the function. 

