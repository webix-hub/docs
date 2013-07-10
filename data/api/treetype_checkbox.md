checkbox
=============

@short: draws a check box

@params:
- obj	object		the data item object
- common	object	the collection of predefined template functions


@returns:
-template	string	the HTML string 
	

@example:
webix.ui({
	view:"tree",
	template:"{common.icon()} {common.checkbox()} {common.folder()} #value#"
});

@relatedsample:
	17_datatree/02_checkbox/01_basic.html
@related:
	datatree/node_templates.md

@template:	api_method
@descr:


