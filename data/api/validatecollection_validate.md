validate
=============


@short:

validates one record or all dataset against the validation rules
	

@params:
* id	string		the id of the record to validate

@returns:
- is_valid		boolean			true, if the record is valid

@example:

mygrid = webix.ui({
	view:"datatable",
	columns:[
		{id:"rank", header:"", width:50, editor:"text"},				
		{id:"title", header:"Film title",  width:200, editor:"text"},        
		{id:"votes", header:"Votes", width:100,	editor:"text"}
	],
	rules:{
		"rank":positiveNumber,
		"votes":positiveNumber
	}
});

/*validate all records*/
var result = mygrid.validate();

/*validate first record*/
var result = mygrid.validate(mygrid.getFirstId());


@template:	api_method
@descr:

If the id was not provided, the component will validate all records. 

The method uses [config.rules](api/link/ui.datatable_rules_config.md) for validation.

Invalid rows are displayed with the "webix_invalid" marker.  

@relatedsample: 
	05_list/06_validation.html

@related:
	desktop/data_validation.md
    
@relatedapi:
	api/validatecollection_clearvalidation.md