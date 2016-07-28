post
=============

@short: issues a POST AJAX request to the server
	
@params:
- url	string	the URL to load
* params	object	the hash of parameters to send to the server
* callback	function	optional callback function


@returns:
- promise	promise		data "promise" object with result parsing methods


@example:
webix.ajax().post('data.php', { filter : '123' }, function (text, xml, xhr) {
    // response
    console.log(text);
});

@template:	api_method
@related:
    helpers/ajax_operations.md
    desktop/serverside.md
@descr:

### Callback

The callback function takes 3 parameters:

- **text** - the full text of the response
- **xml** - the response parsed as XML, if applicable
- **xhr** - an xmlHttpRequest object

### Return value

The method returns a [promise](http://promisesaplus.com/) object than contains the eventual result of the AJAX request. You can use the promise instead of the callback, and access the `result` argument, which will have the following methods:

- **json()** - return the result parsed as JSON
- **xml()** - return the result parsed as XML
- **rawxml()** - return the raw XML data
- **text()** - return the plain text of the result

~~~js
webix.ajax().post('data.php', { filter : '123' }).then(function (result) {
    console.log(result.json());
}).fail(function (xhr) {
    var response = JSON.parse(xhr.response);
    webix.message({type: 'error', text: response.error.message});
});
~~~

More information on Webix and Promiz.js usage can be found at: 

- desktop/data_loading.md#promiseapiindataloading
- helpers/ajax_operations.md#promiseapiforajaxrequests
