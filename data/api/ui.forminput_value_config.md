value
=============

@short: sets the initial value for the control wrapped into FormInput
	
@type: any
@example:
// using ckeditor as a forminput control
var editor = {
    view:"ckeditor"
};

webix.ui({
     view:"form",
     rows:[
        { 
        	view:"forminput", 
            label:"Rich Editor", 
            body:editor, 
            value:"Some value here"
        }               
     ]
});


@relatedsample:
	13_form/01_controls/24_forminput.html
@related:
	desktop/forminput.md
	desktop/controls_guide.md#defininginitialvalues
@relatedapi: 
	api/ui.forminput_getvalue.md
    api/ui.forminput_setvalue.md

@template:	api_config


