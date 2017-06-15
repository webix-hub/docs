getSubMenu
=============


@short: gets the submenu object of a menu item (if any)

@params:
- id	string, number	menu item ID

@returns:
- submenu	object	object of a child menu (submenu), if any

@example:
$$("mymenu").getSubmenu(id);


@template:	api_method
@related: 
	desktop/menu.md
@relatedapi:
	api/ui.menu_getmenu.md
@descr:

The method helps retrieve properties of submenu items:

~~~js
$$("mymenu").attachEvent("onItemClick", function(id){
    var submenu = this.getSubMenu(id);
    if(submenu)	
    	//returns text value of a clicked menu item
    	webix.message("Click: " + submenu.getItem(id).value);
});
~~~


@seolinktop: [mvc library](https://webix.com)
@seolink: [javascript menu library](https://webix.com/widget/menu/)