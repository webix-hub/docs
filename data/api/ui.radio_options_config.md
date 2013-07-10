options
=============


@short: defines options for a set of radiobuttons
	
@type: array
@example:
{ view:"radio", label:"Branch", value:1, options:[
                {  id:1, value:"Master" }, //the initially selected item
                {  id:2, value:"Branch" }

@template:	api_config
@related:
	desktop/controls_guide.md
    desktop/controls.md#radio
@relatedsample:
	13_form/01_controls/04_radio.html
@descr:

Options can be as well enumerated in the array of values: 

~~~js
{view:"radio", options:["Master", "Branch"]}
~~~

