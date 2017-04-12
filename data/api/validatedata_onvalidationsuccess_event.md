onValidationSuccess
=============


@short: fires after a form input has passed validation successfully
	

@params:

- key	string	data key that is being validated
- obj	object	data object 


@example: 
	
$$("form1").attachEvent("onValidationSuccess", function(key,object){
    webix.message("The value entered into the" + key + "input is correct")
});

@template:	api_event

@relatedapi:
	api/validatedata_validate.md
    api/validatedata_onvalidationerror_event.md
    api/refs/rules.md
@related:
	desktop/data_validation.md
	
@descr:


