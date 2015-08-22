headermenu
=============

@short: adds a headermenu to control column visibility
	

@type: boolean, object
@example:

//simple config
webix.ui({
	view:"datatable", 
    headermenu:true
});

//complex config
webix.ui({
	view:"datatable", 
    headermenu:{
    	width:250, 
        autoheight:false, 
        scroll:true
    }
});


@related:
	datatable/headermenu.md
@relatedsample:
	60_pro/01_datatable/02_headermenu/03_header_menu.html
    60_pro/01_datatable/02_headermenu/04_header_menu_extended.html
@template:	api_config
@descr:

The whole list of **parameters** that help configure the header menu can be found in the [related article](datatable/headermenu.md#extendedconfiguration). 

@edition:pro

