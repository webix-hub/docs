promise 
=============

{{memo Interface for working with promise objects. }}

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



<div class='h2'>Methods</div>

{{api
- api/promise_all.md - resolves all promises in the result array
- api/promise_defer.md - creates a new instance of a deferred object (a `promise`)
- api/promise_fcall.md - calls a function and resolves as a promise
- api/promise_nfcall.md - calls a node-style function (eg. expects callback as function(err, callback))
- api/promise_reject.md - 
- api/promise_resolve.md - 
}}





@index:
- api/refs/promise_methods.md

