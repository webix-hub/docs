@link: api/ui.richselect_options_config.md
    
@example:
webix.ui({
    view:"combo",
    value:1, //the initially selected one
    label: 'Fruit',
    options:[ 
        { value:1, label:"Banana"}, 
        { value:2, label:"Papai" }, 
        { value:3, label:"Apple" }
    ]
});

webix.ui({
    view:"combo",
    value:"Apple",
    options:["Banana", "Papai", "Apple"]
});

webix.ui({
    view:"combo",options:"server/options.php"
});

@relatedsample:
	13_form/01_controls/09_combo.html