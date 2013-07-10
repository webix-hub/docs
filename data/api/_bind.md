bind
=============

@short: binds a function to an object
	

@params:
- code		function	the function that will be bound 
- master	object		the object which the function will be bound to

@returns:
- code		function	the bound function 

@example:
var t = webix.bind(function(){
	//this == dtable
	...
}, dtable);
t(); 



@template:	api_method
@descr:

Inside the function the **this** keyword becomes a reference to the object's scope


