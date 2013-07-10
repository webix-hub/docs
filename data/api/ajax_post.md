post
=============

@short: issues a POST Ajax request to the server
	
@params:
- url	string	the url to load
- params	object	the hash of parameters that need sending to the server
- callback	function	the callback function


@returns:
- xhr		object		an xmlHttpRequest object


@example:
webix.ajax().post("data.php", { filter : "123" }, function(text, xml, xhr){
	//response
	alert(text);
});

@template:	api_method
@descr:



The callback function takes 3 parameters:

- **text** - the full text of the response
- **xml** - the response parsed as xml, if applicable
- **xhr** - an xmlHttpRequest object
