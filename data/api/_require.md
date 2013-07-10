require
=============


@short: includes and caches a Javascript module 
	

@params:
- url	string		the path to a Javascript file

@example:
webix.require("extras.js");

@template:	api_method
@descr:

The method is called only once. If you try to include the same module the second time - the command will be ignored. 
