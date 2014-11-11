removeCss
=============


@short: removes a CSS class from a DOM node
	

@params:
- node		element		a DOM node
- name		string		the name of a CSS class to remove

@example:
//any node
webix.html.removeCss(node, "selected");

//webix component top node
webix.html.removeCss( $$("dt").getNode(), "mycss");

@template:	api_method
@descr:


@relatedapi: api/html_addcss.md