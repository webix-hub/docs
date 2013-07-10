single
=============


@short:  implements the singleton pattern
	

@params:
- source		function	the constructor function

@returns:
- singleton		function	the constructor function

@example:
var myobj = function(){ ... };
myobj = webix.single(myobj);

var t1 = new myobj();
var t2 = new myobj(); //t2 === t1

@template:	api_method
@descr:



