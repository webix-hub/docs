header
=============

@short: sets the HTTP request header
	

@params:
- fields	object	 the name-value pairs of header fields

@returns:
- header		object 		the header object
	

@example:
webix.ajax().header({
   	'Accept-Encoding': 'gzip', 
    'Accept-Language': 'en-US'
})

@template:	api_method
@descr:
The default header definition  is  <code> { 'Content-type': 'application/x-www-form-urlencoded' }</code>.




