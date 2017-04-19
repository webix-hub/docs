@link: api/ui.fieldset_body_config.md

@short: config of the widget to be wrapped into a FormInput
	

@type: WebixView
@example:

// a widget to be transformed into a form input
var list1 = { 
    view:"dbllist", 
    data:[
        {id:"1", value:"Guest"},
        {id:"2", value:"Member"},
        {id:"3", value:"Moderator"}
    ]
};

// FormInput initialization
var forminput = webix.ui({
 	view:"forminput", 
    name:"access", 
    body:list1, 
    labelWidth: 140,
    labelAlign:"right", 
    label:"Access levels" 
});



@template:	api_config
@descr:

@related:
desktop/forminput.md

@relatedsample:
13_form/01_controls/25_dbllist.html
