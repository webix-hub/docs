rules
=============


@short: defines a set of rules for input field(s) of the form(htmlform)
	

@type: 
@example:
webix.ui({
	view:"form",
    elements: [..],
    rules:{
  		login: rule1,
        email: rule2
    }
});

@template:	api_config

@relatedapi:
	api/refs/rules.md
@related:
	desktop/data_validation.md
	
@descr:

Rules object contains hash of key value pairs where:

- **key** - form field name, data key used for component template, datatable colimn ID.
- **value** - the rule applied. Can be [predefined](api/refs/rules.md) or custom (any function can be a rule).



