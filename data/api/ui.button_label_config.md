label
=============

@short:
	the text label of the control

@type: string
@example:
webix.ui({
	container:"box",
	view:"form",
	elements:[
		{ view:"text", label:"Email"},
		{ view:"text", label:"Password"},
		{ cols:[
			{ view:"button", label:"Login" , type:"form" },
			{ view:"button", label:"Cancel" }
		]}
	]
});

@template:	api_config
@defined:	ui.button	
@relatedsample:
	02_toolbar/06_toolbar_button.html
@related:
	desktop/controls_guide.md
@descr:
The property should not be mixed with the [label](api/refs/ui.label.md) control. 

Moreover, label control can have a label as well, but there's no sense in it. 