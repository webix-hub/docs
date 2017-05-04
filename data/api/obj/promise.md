{{memo Interface for working with promise objects}}

For more details, read the [Ajax operations](helpers/ajax_operations.md#promiseapiforajaxrequests) documentation.

###Constructor

~~~js
var my_promise = new webix.promise(function(success, fail){
	webix.ajax("some.php", function(text){
		if (text) success(text);
		else fail(text.error)
	})
});

//realdata - data that came from server
my_promise.then(function(realdata){
    ...
});
~~~
