id
=============


@short: the component ID

@type: string,number
@example:
webix.ui({
	view:"window",
	id:"win3",
    ...
});

$$('win3').close();

@template:	api_config
@defined:	ui.baseview	
@related:
	tutorials/start_coding.md#main
    desktop/view.md

@relatedsample: 
	10_window/01_init.html

@descr:


The parameter can contain any string or numeric value and doesn't have a limit on length.

It is used when referring to the component to apply and methods to it, attach events and getting to its properties.
