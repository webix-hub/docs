refresh
=============



@short:
	repaints the component

	

@example:
webix.ui({
    container:"box",
    view:"form", 
    elements:[
        { view:"button", id:"b1", value:"Edit", type:"form" },
        { view:"button", id:"b2", value:"Back", type:"form" }
    ]
});
...
$$("b1").define("value","Save");
$$("b1").refresh(); // value:"Edit" -> value:"Save"

@template:	api_method
@relatedapi:
	api/atomrender_render.md
@related: 
	desktop/redefinition.md
@defined:	ui.button	
@descr:


