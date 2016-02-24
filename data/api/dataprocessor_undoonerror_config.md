undoOnError
=============

@short:
	defines whether undo will be made if server returns error response 

@type: boolean
@example:
var dp = new webix.DataProcessor({
    master:$$("list"),
    url:"some.php",
    undoOnError:true
});

@template:	api_config
@descr:
Pay attention that the api/undo_undo_config.md property should be enabled for the data component 

