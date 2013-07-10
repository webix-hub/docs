send
=============


@short: sends an HTTP request to the server (emulates submitting a form)
	

@params:
- url		string		the url of a file to load
- values	object		the hash of parameters that need sending to the server
- method	string		the type of request: 'GET' or 'POST'. By default, 'POST'

@example:

webix.send("page.php",{record:123}, "GET");

@template:	api_method
@descr:

