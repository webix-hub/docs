getSubMenu
=============


@short: gets the submenu object within menu component
	

@example:
$$("mymenu").getSubmenu();


@template:	api_method
@related: 
	desktop/menu.md
@relatedsample: 
	03_menu/01_menubar.html
@descr:

The method helps retrieve properties of submenu items:

~~~js
$$("my_menu").attachEvent("onItemClick", function(id){
    var menu = this.getSubMenu(id);
    webix.message("Click: "  +menu.getItem(id).value);
    });
  //returns text value of a clicked menu item
~~~
