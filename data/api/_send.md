send
=============


@short: sends an HTTP request to the server (emulates submitting a form)
	

@params:
- url		string		the url of a file to load
- values	object		the hash of parameters that need sending to the server
- method	string		the type of request: "GET" or "POST". By default, "POST";
- target	string		the page that will be shown after function execution: "_self" or "_blank". "_self" by default

@example:

webix.send("page.php",{record:123}, "GET");

@template:	api_method
@descr:
One of the possible use cases for this method is various kinds of export: 

~~~js
webix.send(url, { grid_xml : encodeURI(xml) }, null, "_blank");
~~~
