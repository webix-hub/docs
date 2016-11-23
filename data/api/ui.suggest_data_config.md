data
=============


@short:
	JavaScript array containing data for the component

@type: string,array
@example:
var books = [
	[ "War and Peace", "Leo Tolstoy" ],
	[ "Hamlet", "Shakespeare" ],
	[ "Madame Bovary", "Gustave Flaubert" ]
];

webix.ui({
	view: "list",
	data: books,
	datatype: "jsarray",
	template: "#data0# (#data1#)"
});    


@template:	api_config
@defined:	AtomDataLoader	
@descr:
For data types **other than JSON** the property is used in conjunction with the api/atomdataloader_datatype_config.md parameter.

@relatedapi:
	api/atomdataloader_datatype_config.md
@related:
	desktop/data_loading.md
@relatedsample:
	06_dataview/01_initialization/01_init.html
