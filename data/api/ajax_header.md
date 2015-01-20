header
=============

@short: 
	sets the HTTP request header(s)
	

@params:

- fields	object	 the name-value pairs of header fields

@returns:

- header		object 		the request object
	

@example:
webix.ajax().header({
   	'Accept-Encoding': 'gzip', 
    'Accept-Language': 'en-US'
})

@related:
	helpers/ajax_operations.md
    desktop/serverside.md
@template:	api_method
@descr:
The default header definition  is  <code> { 'Content-type': 'application/x-www-form-urlencoded' }</code>.




