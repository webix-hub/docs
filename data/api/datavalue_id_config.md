id
=============


@short: the component ID

@type: id
@example:
webix.ui({
	view:"radio", 
    id:"rad", 
    click:"change_batch", 
    options:[
		"1","2", "3"
	]      
});


function change_batch(){
	var mode = $$("rad").getValue(); // "1" or "2"
	$$("mybar").showBatch(mode); //the value is passed into the function
}

@template:	api_config
@defined:	ui.baseview	
@related:
	tutorials/start_coding.md#main
    desktop/view.md

@relatedsample: 
	02_toolbar/14_batches.html

@descr:


The parameter can contain any string or numeric value and doesn't have a limit on length.

It is used when referring to the component to apply and methods to it, attach events and getting to its properties.
