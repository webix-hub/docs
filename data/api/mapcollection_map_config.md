map
=============

@short: defines data mapping
	

@type: hash
@example:

webix.ui({
	view:"datatable",
	map:{
		name:"#firstname# #lastname#",
		birth:"(date)#birthdate#"
	},
	columns:[
    	{ id:"name", header:"User name" },
        { id:"birth", header:"Date of birth"}
    ],
    data:[
    	{ id:1, firstname:"Adam", lastname:"Smith", birthdate:new Date(1985, 1, 1) },
        { id:2, firstname:"Tom", lastname:"Brown", birthdate:new Date(1986, 2, 2) },
    ]
});


@template:	api_config
@descr:

For details, check datatable/data_mapping.md

