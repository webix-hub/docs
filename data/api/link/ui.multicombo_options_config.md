@link: api/ui.richselect_options_config.md

@example:
webix.ui({
    view:"multicombo",
    value:1, // the initially selected one
    label: 'Fruit',
    options:[ 
       { "id":1, "value":"Banana"}, 
       { "id":2, "value":"Papaya"}, 
       { "id":3, "value":"Apple"}
    ]
});

webix.ui({
    view:"multicombo",
    value:"Apple",
    options:["Banana", "Papaya", "Apple"]
});

webix.ui({
    view:"multicombo",
    options:"server/options.php"
});

@relatedsample:
	13_form/01_controls/09_combo.html