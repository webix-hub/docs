state
=============

@short:
	defines the position and size of Sidemenu

@type: function
@values:
- state		an object that contains the position and size values set as Sidemenu properties

@example:
webix.ui({
	view: "sidemenu",
    width: 200,
    position: "left",
    state:function(state){
        // get the toolbar's height
        var toolbarHeight = $$("toolbar").$height;
        // increase the 'top' property
        state.top = toolbarHeight;
        // decrease the 'height' property
        state.height -= toolbarHeight;
    };
});

@template:	api_config
@descr:
@related:
desktop/sidemenu.md#customizingsizeandposition

