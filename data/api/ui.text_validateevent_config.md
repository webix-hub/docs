validateEvent
=============


@short: on which event validation fires
	

@type: string
@values:
- key 	validation starts on key pressing within the imput
- blur	validation starts when focus is removed from the control

@example:

webix.ui({ view:"text", validate:"isNumber", validateEvent:"key" });


@template:	api_config
@descr:
