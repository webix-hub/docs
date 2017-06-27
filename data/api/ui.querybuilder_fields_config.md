fields
=============


@short:
	sets an array of fields that will be used for filtering dataset

@type: array
@example:
webix.ui({
	view: "querybuilder",
	id: "querybuilder",
	fields: [
		{ id:"fname",	value:"First Name", 	type:"string" },
		{ id:"lname", 	value:"Last Name",  	type:"string" },
		{ id:"age",  	value:"Age", 			type:"number" },
		{ id:"bdate",  	value:"Birth Date", 	type:"date" }
	]
});

@template:	api_config
@descr:

@related:
querybuilder/initialization.md

@relatedsample:
66_querybuilder/01_initialization/01_init.html

