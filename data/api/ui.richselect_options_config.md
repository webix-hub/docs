options
=============


@short:
	defines data items of the drop-down list

@type: object
@example:
webix.ui({
    view:"richselect",
    value:1, // the initially selected one
    label: 'Fruit',
    options:[ 
        { "id":1, "value":"Banana"}, 
        { "id":2, "value":"Papaya"}, 
        { "id":3, "value":"Apple"}
    ]
}); 

webix.ui({
	view:"richselect",
    options:["Banana", "Papaya", "Apple"]
});

webix.ui({
	view:"richselect", 
    options:"server/options.php"
});

@template:	api_config
@defined:	ui.richselect	
@related:
	desktop/controls_guide.md
@relatedsample:
	13_form/01_controls/11_richselect.html
@relatedapi:    
	api/datavalue_getvalue.md
    api/datavalue_setvalue.md
    api/ui.button_value_config.md
	
@descr:

Each option presents a singular select option in the drop-down list. Options can be set as: 

- a simple array;
- an associative array of objects with **id** and **value** properties;
- a string with a path to a script that loads options from server. 

The initially selected option is defined by a api/ui.button_value_config.md property. 



