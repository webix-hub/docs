getMenu
=============


@short: gets object of a menu/submenu where an item is located
	
@params:
- id	string, number	id of a menu item

@returns:
- menu 	object	object of menu (or submenu) where the item is located

@example:
$$("mymenu").attachEvent("onItemClick", function(id){
	var menu = this.getMenu(id);
	webix.message("Click: "+menu.getItem(id).value);
	}
});

@relatedsample:
	03_menu/02_menubar_template.html
@relatedapi:
	api/ui.menu_getsubmenu.md
@related:
	desktop/menu.md
@template:	api_method
@descr:

