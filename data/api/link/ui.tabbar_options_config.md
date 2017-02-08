@link: api/ui.segmented_options_config.md

@short:
	defines tabs in a tabbar

@example:
webix.ui({
	view:"tabbar", 
    id:"tabbar", 
    value:"listView", // the initially selected tab
    multiview:true, 
    options: [
    	{"id":"listView", "value":"List"},
        {"id":"formView", "value":"Form"},
        {"id":"emptyView", "value":"Empty"}
    ]
});

@relatedsample:

13_form/01_controls/08_tabbar.html