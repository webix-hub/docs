headers
=============

@short: 
	sets the HTTP request header(s)
	
@params:
- values	object	 the name-value pairs of header fields

@returns:
- self		object 		the ajax object

@example:
webix.ajax().headers({
   	'Accept-Encoding': 'gzip', 
    'Accept-Language': 'en-US'
})

@related:
	helpers/ajax_operations.md
    desktop/serverside.md
@template:	api_method
@descr:

The default header definition  is  <code> { 'Content-type': 'application/x-www-form-urlencoded' }</code>.




