operationName
=============


@short: name of parameter which will hold operation type
	

@type: 
@example:

var dp = new webix.DataProcessor({
    master:$$("list"),
    operationName:"operation"
})

//on server you will have $_POST["operation"]

@template:	api_config
@related:
	desktop/dataprocessor.md
@descr:

Default value - "webix_operation" 



