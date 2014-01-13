submenu
=============


@short: defines submenu configuration

@type: object
@example:
webix.ui({
	view:"menu",
	width:150,
	submenu:{
		width:250,
		template:"SUB #value#"
	}
});

@template:	api_config

@related:
	desktop/menu.md
@descr:

This options defines not the data of submenu but its sizing, styling, templates, handlers etc.

In case of context menu - settings will be applied to a top level menu as well. 

