get
=============

@short: issues a GET Ajax request to the server
	
@params:
- url	string	the url to load
* params	object	the hash of parameters that need sending to the server
* callback	function	the callback function


@returns:
- promise		promise		data "promise" object


@example:
webix.ajax().get("data.php", { filter : "123" }, function(text, xml, xhr){
	//response
	console.log(text);
});

@related:
	helpers/ajax_operations.md
    desktop/serverside.md

@template:	api_method
@descr:

###Callback

The callback function takes 3 parameters:

- **text** - the full text of the response
- **xml** - the response parsed as xml, if applicable
- **xhr** - an xmlHttpRequest object

###Return value

The method returns a [promise](http://promisesaplus.com/) object than contains the eventual result of an Ajax request. 

More information on Webix and Promiz.js usage can be found at: 

- desktop/data_loading.md#promiseapiindataloading
- helpers/ajax_operations.md#promiseapiforajaxrequests

@metadescr: Learn how to use AJAX features in your Webix apps. This page describes the get method that allows sending GET AJAX request to the server.
@doctitle: The documentation page for the ajax get method.