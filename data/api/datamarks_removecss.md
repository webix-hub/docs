removeCss
=============

@short: removes CSS class from a component item
	

@params:
- id	string,number	ID of the necessary item
- CSS class		string		CSS class name

@example:
var menu = $$("menu1").getSubMenu(id);
menu.removeCss(id, "webix_disabled");

@relatedapi:
	api/datamarks_addcss.md
@relatedsample:
	03_menu/09_disable_item.html
@related:
	desktop/menu.md
@template:	api_method
@descr:

The method is true for removing CSS only from those items which CSS was previously added by **addCSS()**.

