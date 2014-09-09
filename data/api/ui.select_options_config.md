options
=============

@short: defines options for a select control
	
@type: array, string
@example:
//simple array
{ view:"select", label:"Version", options:["1.0", "1.5", "2.0"]}

//id-value pairs
{ view:"select", value: 2, label:"Branch", options:[
	{ value:"Master", id:1 },
	{ value:"Release", id:2 }
]},

//serverside options
{ view:"select", label:"Version", options:"server/options.php"}



@template:	api_config
@relatedapi:
	api/ui.button_value_config.md
@related:
	desktop/controls_guide.md
    desktop/controls.md#select
@relatedsample:
	13_form/01_controls/02_select.html
@descr:

Options can be set as: 

- a simple array;
- an associative array of objects with **id** and **value** properties;
- a string with a path to a script that loads options from server. 

The initially selected options is defined by api/ui.button_value_config.md property. 

