stringify
=============

@short: converts data object into a string before sending it to server
	

@params:
- data 		object	data object

@returns:
- data		string	data string


@example:

var str = webix.ajax().stringify({ some: "a" });

@template:	api_method
@descr:

The method is called automatically before data is sent to server. If there are dates within the data object they are formatted with the api/i18n_parseformatstr.md method. 

If you want to redefine the data serialization for all ajax calls you can use

~~~
webix.ajax.prototype.stringify = function(obj){	
	//or use some custom serializer here
	return JSON.stringify(obj);
}
~~~


If you just need a method for object serialization, you may use JSON.stringify directly
~~~
var str = JSON.stringify({ some: "a" });
~~~

@metadescr: Learn how you can use AJAX features in your Webix apps. This page describes how the stringify method can be used for converting data object into a string.
@doctitle: The documentation page for the ajax stringify method.