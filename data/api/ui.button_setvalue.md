setValue
=============



@short:
	sets a new value for the component

@params:
- value		string 	a new value for the button

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
$$('b1').setValue("Save");
$$('b2').setValue("Cancel");

@template:	api_method
@relatedapi:
	api/ui.button_getvalue.md
@related:
	desktop/controls_guide.md
@defined:	ui.button	
@descr:


