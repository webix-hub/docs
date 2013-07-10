connectorName
=============


@short: name of parameter which will hold operation type ( in case of connector protocol ) 
	

@type: 
@example:

var dp = new webix.DataProcessor({
    master:$$("list"),
    connectorName:"operation_type"
})

@template:	api_config
@descr:

By default "!nativeeditor_status"  
To work correctly, server side connector need to be configured with the same name. 
