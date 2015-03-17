name
=============


@short: indicates the name of the component (a read-only property)

@type: string

@example:
var data = new webix.DataCollection({
        url:"some_data.json" 
});

var name = data.name; //returns 'DataCollection'

@template:	api_config
@defined:	ui.baseview	
@descr:

The hardcoded value of the property is "DataCollection".