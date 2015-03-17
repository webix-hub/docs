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
