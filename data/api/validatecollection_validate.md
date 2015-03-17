validate
=============


@short:

validates one record or all dataset against validation rules
	

@params:
* id	string		id of record to validate

@returns:
- is_valid	boolean	true if record is valid

@example:

mygrid = webix.ui({
    view:"list",
    ...
    rules:{
    	"text":webix.rules.isNotEmpty
    }
});

/*validate all records*/
var result = mygrid.validate();

/*validate first record*/
var result = mygrid.validate( mygrid.getFirstId() );



@template:	api_method
@descr:

If id was not provided - component will validate all records. 

Methods uses config.rules for validation

Invalid rows has "webix_invalid" marker on them 

@relatedsample: 
	05_list/06_validation.html

@related:
	desktop/data_validation.md
    
@relatedapi:
	api/validatecollection_clearvalidation.md