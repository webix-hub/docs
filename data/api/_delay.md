delay
=============


@short: delays a code from executing at runtime. The method waits for the specified number of milliseconds and then executes the specified code

@params:
- code		function		the code you want to delay
* owner		object			an object that the <b>this</b> keyword refers to
* params	array			an array of callback parameters
* delay		number			the delay in milisecods. By default, 1 millisecond


@returns:
- id		number			the timeout id (can be used by the <b>clearTimeout()</b> method )	

@example:
webix.delay(function(){
	do_something();
});
//or
webix.delay(function(a, b){
	//a == 1
	//b == "abc"
	//this == dtable
	do_something();
}, dtable, [1, "abc"], 100);

@template:	api_method
@descr:


