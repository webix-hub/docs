align
=============


@short: the alignment of the control within the parent container
@values:
- 'left'	aligns the control to the left <i>(the default value)</i>
- 'center'  centers the control
- 'right'  aligns the control to the right

@type: string 

@example:
webix.ui({
    container:"box",
    cols:[
        { view:"form", elements:[
            { view:"checkbox", id:"ch1", label:"Block", align:"left"},
            { view:"checkbox", id:"ch2", label:"Load"},
            { view:"checkbox", id:"ch3", label:"Enable"} 
        ]}
    ]
});

@template:	api_config

@related: 
	desktop/controls_guide.md
@relatedsample:
	02_toolbar/04_toolbar_align.html
@descr:

