onValidationError
=============


@short: fires when newly loaded/added/edited data fails to pass validation
	

@params:
- id	number, string		id of the data item that is being validated
- obj	object	data item object	
- details	object	validation result for data keys under validation

@example: 
webix.ui({
	view:"datatable", 
	rules:{
		title:webix.rules.isNotEmpty,
        rating:webix.rules.isNumber
	},    
	on:{
		onValidationError:function(id, obj, details){
			var index = this.getIndexById(id)+1;
			webix.message({ type:"error", text:"Empty title for row "+index });
		}
     }
});


@template:	api_event

@relatedsample: 
	15_datatable/25_validation/04_message.html
    15_datatable/25_validation/05_message_complex.html

@relatedapi:
	api/validatecollection_validate.md
    api/refs/rules.md
    api/validatecollection_onvalidationsuccess_event.md
    
@related:
	desktop/data_validation.md
	
@descr:

The last parameter, **details**, contains **invalid** markers for each data key  that has been validated and looks like:

~~~js
{
	title:true,//haven't passed validation
	rating:false //have passed validation
}    
~~~




