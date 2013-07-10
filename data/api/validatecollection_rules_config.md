rules
=============


@short:
	set of validation rules for the component

@type: 
@example:

webix.ui({
    view:"datatable",
	rules:{
    	"year": webix.rules.isNotEmpty,
        "value": function(value){ return value > 0 }
    }
})

@template:	api_config
@relatedapi:
	api/refs/rules.md
@related: 
	desktop/data_validation.md
@descr:

You will not be able to save data to server side if it doesn't
conform to validation rules. 