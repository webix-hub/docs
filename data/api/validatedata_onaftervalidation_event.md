onAfterValidation
=============


@short: fires after data has been validated


@example:
on:{
	onAfterValidation:function(result, value){
			if (!result){
				var text = [];
				for (var key in value){
					if (key == "login")
						text.push("Login can't be empty");
					if (key == "email")
						text.push("Invalid Email");
				}
				webix.message({ type:"error", text:text.join("<br>") });
			}
		}
	}

@template:	api_event
@relatedsample:
	13_form/04_validation/05_message_complex.html
@relatedapi:
	api/link/ui.form_onbeforevalidate_event.md
@related:
	desktop/data_validation.md
    desktop/event_handling.md
@descr:


