scheme
=============


@short:
	defines schemes for data processing

@type: object
@example:
var list1 = webix.ui({
	view:"list",
    ...
    scheme:{
		name:"Unknown",
		age:16
	}
});
list1.add({}); //adds { name:"Unknown", age:16} record

@template:	api_config
@defined:	DataLoader	
@relatedsample:
	05_list/04_list_grouping.html
    08_chart/03_group/01_group.html
@related:
	desktop/data_scheme.md
@descr:
