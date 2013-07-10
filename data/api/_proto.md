proto
=============

@short: merges the contents of several objects together into the first object
	

@params:
- target	object		the object to extend. It receives the new properties
* mixin1	object		an object that contains properties to merge in
* mixinN	object		another objects that contains properties to merge in

@returns:
- result	object		the target object with the new properties

@example:
var code = webix.proto(myobject, webix.MouseEvents);

@relatedapi: api/_extend.md, api/_copy.md, api/_clone.md
@template:	api_method
@descr:
The method is similar to api/_extend.md. <br> The only difference between methods lies in the number of objects to merge: in case of the api/_extend.md method you deal with one source object, in case of the **proto** method  you have the unlimited number of the source objects.
