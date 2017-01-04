@link: api/ui.richselect_options_config.md


@example:
webix.ui({
    view:"multiselect",
    value:1, // the initially selected one
    label: 'Fruit',
    options:[ 
        { "id":1, "value":"Banana"}, 
        { "id":2, "value":"Papaya"}, 
        { "id":3, "value":"Apple"}
    ]
}); 

webix.ui({
	view:"multiselect",
    options:["Banana", "Papaya", "Apple"]
});

webix.ui({
	view:"multiselect", 
    options:"server/options.php"
});


@relatedapi: 
	api/ui.multiselect_optionwidth_config.md
    api/datavalue_getvalue.md
    api/datavalue_setvalue.md
    api/ui.button_value_config.md
    
@relatedsample:
	60_pro/02_form/02_multiselect.html
	