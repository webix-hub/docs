isNotEmpty
=============



@short: checks whether the text field is empty or not

@returns:
- valid    boolean     true if value is not empty

@example:

rules:{ // component's name is used to apply the rule to it
		"login":webix.rules.isNotEmpty
       }

@template:	api_method

@relatedapi:
	api/link/ui.form_validate.md
    api/link/ui.form_rules_config.md
    api/refs/ui.text.md
    api/refs/ui.form.md
    api/refs/ui.htmlform.md

@defined:	rules	
@related:
	desktop/data_validation.md
@relatedsample:
	13_form/04_validation/01_basic.html
@descr: 
There should be at least one character in the text field to pass validation. 

