popup
=============


@short:
	allows to attach pop-up menu to the button

@type: object
@example:
webix.ui({
       view:"toolbar", 
       elements:[
       	{view:"button", label: 'Menu', popup:"my_pop"}, 
        ...
        ]
});

webix.ui({
       view:"popup",
       id:"my_pop",
       body:{
       	view:"list", 
        ...
}).hide();
            
@relatedsample:
	10_window/05_popup_menu.html
@related:
	desktop/popup.md

@template:	api_config
@defined:	ui.button	
@descr:

The property's value is the ID of pop-up object that should appear on clicking the button. The object is initialized in the separate **webix.ui()** constructor. It's initially hidden.  
