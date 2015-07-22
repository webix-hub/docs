expandNames
=============


@short: converts string names to objects
	

@params:

- obj     hash     hash of key-value pairs

@returns:

- res     obj       some complex data object

@example:

var obj = { "user.some.key" : 123 };
var res = webix.CodeParser.expandNames(obj);
// res = { user: { some: { key: 123 } } }; 

@template:	api_method
@descr:

