autowidth
============

@short:
	adjusts the width of Submenus to their labels

@type: boolean
@example:

webix.ui({
    view:"menu",
    autowidth:true,
    data:[
		{ id:"1",value:"Short...",
			submenu:[ "FB", "G+", "TW" ]},
		{ id:"2",value:"Medium...",
			submenu:[ "Facebook", "Google+", "Twitter" ]},
        ...
    ]
});

@template:	api_config
@descr:
@related:
desktop/menu.md#autowidth
@relatedsample:
03_menu/17_submenu_autowidth.html

@seolinktop: [open source html5 framework](https://webix.com)
@seolink: [javascript menu](https://webix.com/widget/menu/)