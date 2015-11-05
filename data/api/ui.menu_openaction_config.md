openAction
=============

@short:
	alters the way of submenu opening to "click"

@type: string
@example:
webix.ui({
	view:"menu",
    id:"my_menu",
    data:[ //menu data
        { value:"Translate...", submenu:["English", "Slavic...", "German"]},
    ],
	openAction:"click"    
});


@template:	api_config
@descr:
If the parameter is set, you should first click menu item to enable submenu opening and hiding on "onMouseOver" and "onMouseOut" events.

To hide submenus, you need to click somewhere outside the menu.

