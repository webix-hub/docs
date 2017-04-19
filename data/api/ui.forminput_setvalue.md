setValue
=============


@short:
	sets a new value for the control

@params:
- value		any 		a new value for the control

@example:
webix.ui({
   view:"form", 
   rows:[
      { 
        view:"forminput", 
        id:"forminput1", 
        label:"Rich Editor", 
        body:editor
      }
    ]
});
 
$$("forminput1").setValue("Some value here");


@template:	api_method
@relatedapi:
	api/ui.forminput_getvalue.md
@related:
	desktop/controls_guide.md
    desktop/forminput.md
@defined:	ui.button	
@descr:

