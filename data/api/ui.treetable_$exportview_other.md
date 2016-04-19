$exportView
=============

@todo:
	check!


@short:
	returns an exported view, allows customizing the options of the exported view

@type:

@example:
webix.protoUI({
	view:"myview",
	$exportView:function(options){
		webix.extend(options, { 
        	filterHTML: true 
        });
		return this;
	},
}, webix.ui.view);
@template:	api_config
@descr:


