onAfterValidation
=============


@short: fires after data has been validated

@params:

- result	boolean		result of validation (true or false)
- value		obj		object with data that has been validated

@example:
dp.attachEvent("onAfterValidation", function(result, value){
	//code
});

@template:	api_event
@relatedsample:
	13_form/04_validation/05_message_complex.html
@relatedapi:
	api/link/ui.form_onbeforevalidate_event.md
@related:
	desktop/data_validation.md
    desktop/event_handling.md
@descr:


