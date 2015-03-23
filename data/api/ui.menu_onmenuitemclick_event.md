onMenuItemClick
========================

@short: fires when menu item has been clicked

@params:
- id	id		item ID
- e		Event		mouse event object
- node	HTMLElement	target HTML element

@example:

menu.attachEvent("onMenuItemClick", function(id, e, node){
	//code
});

@template:api_event

@relatedapi:
	api/link/ui.menu_onitemclick_event.md
@relatedsamples:
	03_menu/01_menubar.html
    03_menu/12_submenu_config.html
    

@descr:

Unlike the api/link/ui.menu_onitemclick_event.md, this event fires for all menu item regardless of their nesting level. 