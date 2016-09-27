addStyle
=============

@short: adds a CSS rule to the page
	

@params:
- css		string		the CSS text
- name		string		name of the css group

@example:
webix.html.addStyle(".myclass{ color:red; }");


@template:	api_method
@descr:

By default css rules will be added to "default" css group. 

This parameter makes sense if you want to [remove some css rules](api/html_removestyle.md) afterwards.

@relatedapi:
- api/html_removestyle.md
- api/html_addcss.md
