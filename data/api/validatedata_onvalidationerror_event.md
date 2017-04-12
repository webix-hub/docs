onValidationError
=============


@short: fires when a form input fails to pass validation
	

@params:
- key	string	data key that is being validated
- obj	object	data object 

@example: 
webix.ui({
	view:"form",    
	on:{
		onValidationError:function(key, obj){
		var text;

		if (key == "login")
			text = "Login can't be empty";
		if (key == "email")
			text = "Invalid Email";

		webix.message({ type:"error", text:text });
	}
});

@template:	api_event

@relatedsample: 
	13_form/04_validation/04_message_complex.html

@relatedapi:
	api/validatedata_validate.md
    api/refs/rules.md
    api/validatedata_onvalidationsuccess_event.md
    
@related:
	desktop/data_validation.md
	
@descr:


