folder
=============
@short:draws an icon of the folder
	

@params:
- obj	object		the data item object
- common	object	the collection of predefined template functions


@returns:
-template	string	the HTML string 
	


@example:
webix.ui({
	view:"tree",
	template:"{common.folder()} #value#"
});

@relatedsample:
	17_datatree/03_styles/04_without_icons.html
@related:
	datatree/node_templates.md


@template:	api_method
@descr:

If a tree features **no template**, state icon (common.icon()) and folder icons (common.folder()) are drawn for it. 

If you set **only a folder icon** for a tree, state icons won't be drawn. 

