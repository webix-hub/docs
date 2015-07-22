collapseNames
=============


@short: convert complex object to simple hash
	

@params:

- obj     any     some complex object

@returns: 

- res      hash    hash of key-value pairs

@example:

var obj = { user: { some: { key: 123 } } }; 
var res = webix.CodeParser.collapseNames(obj);
// res = { "user.some.key" : 123 };


@template:	api_method
@descr:

