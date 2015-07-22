map
=============

@short: defines data mapping
	

@type: hash
@example:

webix.ui({
	view:"list",
	map:{
		name:"#firstname# #lastname#",
		birth:"(date)#birthdate#"
	},
	template:"#name#"
});


@template:	api_config
@descr:

For details, check datatable/data_mapping.md

