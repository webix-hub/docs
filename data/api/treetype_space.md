space
=============
@short: draws the space
	
@params:
- obj	object		the data item object
- common	object	the collection of predefined template functions




@returns:
- template	string	the HTML string 
@template:	api_method
	

@example:
webix.ui({
	view:"tree",
	template:"{common.icon()} {common.space()} {common.folder()} #value#"
});

@related:
	datatree/node_templates.md



