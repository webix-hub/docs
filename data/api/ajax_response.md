response
=============

@short:
	sets response type of the request

@params:
- type 	string	response type

@example:
webix.ajax().response("blob").get("patch.zip", function(text, data){
  //data - is a data blob
});

@template:	api_method
@related:
	helpers/ajax_operations.md
@descr:

Possible values to pass into this method are: 

- "blob" - binary data object
- "arraybuffer" - binary data object
- "document" - web page object 

