addCss
=============

@short: adds a CSS class to a DOM node
	
@params:
- node		HTMLElement		a DOM node
- name		string		the name of a CSS class to apply

@example:
//any node
webix.html.addCss(node,"mycssrule");

//Webix component top node
webix.html.addCss( $$("dt").getNode(), "mycss");


@template:	api_method
@descr:

@relatedapi:
	api/html_addstyle.md
	api/html_removecss.md

@metadescr: Learn how you can use the addCss method for adding a css class to a DOM node.
@doctitle: The documentation page for the addCss html helper method.
