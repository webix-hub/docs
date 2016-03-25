$exportView
=============


@short:
	returns an exported view, allows customizing the options of the exported view

@type: function

@example:
webix.protoUI({
    view:"myview",
	$exportView: function(options) {
		webix.extend(options, { 
        	header: false, 
            rawValues: true, 
            spans: true, 
            xCorrection: 1, 
            yCorrection: 1 
        });
	    return this._table;
	},
}, webix.ui.view);

 
@template:	api_config
@descr:




