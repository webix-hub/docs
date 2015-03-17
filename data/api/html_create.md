create
=============

@short: creates a new HTML element
	

@params:
- name		string		the name of an HTML element
- attrs		object		the hash of attributes
* html		string		the inner HTML of a new element



@returns:
- element	HTMLElement 	a newly-created HTML element

@example:
webix.html.create("div", { name:"myname" }, "Some content");

@template:	api_method
@descr:


@relatedapi:api/html_remove.md