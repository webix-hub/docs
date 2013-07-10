wrap
=============

@short: 'wraps' a function around the original function

@params:
- target	function	the function to wrap. It receives the new logic
- source	function	a function that contains the logic to wrap
@returns:
- target	function	the target object 'wrapped' around by the new logic
	
@example:
list.add = webix.wrap(list.add, function(obj, index){
	//log all data adding operations
	console.log("add "+obj.id);
});

@template:	api_method
@descr:



