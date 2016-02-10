$exportView
=============


@short:
	the method that will be called when a view is exported

@type: function

@example:
webix.protoUI({
    view:"myview",
	$exportView: function $exportView(options) {
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




