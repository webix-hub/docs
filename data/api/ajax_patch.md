patch
=============


@short: issues a PATCH Ajax request to the server
	
@params:
- url	string	the url to load
* params	object	the hash of parameters that need sending to the server
* callback	function	the callback function


@returns:
- promise		promise		data "promise" object


@example:
webix.ajax().patch("data.php", { id : "11" }, function(text, xml, xhr){
	//response
	console.log(text);
});

@related:
	helpers/ajax_operations.md
    desktop/serverside.md
@template:	api_method
@descr:



The callback function takes 3 parameters:

- **text** - the full text of the response
- **xml** - the response parsed as xml, if applicable
- **xhr** - an xmlHttpRequest object

