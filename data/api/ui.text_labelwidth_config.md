labelWidth
=============


@short:
	the width of the label

@type: number
@example:
webix.ui({
    container:"box",
    cols:[
        { view:"form", elements:[
            { view:"checkbox", id:"ch1", label:"Block pop-up windows", labelWidth:80},
            { view:"checkbox", id:"ch2", label:"Load images automatically"},
            { view:"checkbox", id:"ch3", label:"Enable JavaScript"} 
        ]}
    ]
});

@template:	api_config
@defined:	ui.text	
@descr:

@relatedsample:
	13_form/01_controls/01_text.html
@related: 
	desktop/controls_guide.md
@relatedapi:
	api/ui.button_label_config.md