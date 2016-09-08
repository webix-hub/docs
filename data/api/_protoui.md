protoUI
=============

@short: merges the contents of several objects together into the first object and creates from it a new view
	

@params:
- target		object		the object to extend. It receives the new properties
- view			object		the view object that a new view is inherited from
- mixins		object		one or many mixin objects

@returns:
- result	object		the new view (target object) with the new properties

@example:
webix.protoUI({
	name:"mylist"
}, webix.ui.list, webix.ActiveContent);

var list = webix.ui({
	view:"mylist"
});

@template:	api_method

@relatedapi: api/_extend.md, api/_copy.md, api/_clone.md, api/_proto.md

@descr:
The method is similar to api/_proto.md. The only difference is that **protoUI** creates a new view based on another view and api/_proto.md doesn't. As for the rest, it's the same.
