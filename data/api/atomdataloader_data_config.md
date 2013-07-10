data
=============


@short:
	an inline dataset that data to the component will be load from. 

@type: string,array
@example:
var books = [
	["War and Peace", "Leo Tolstoy" ],
	["Hamlet", "Shakespeare" ],
	["Madame Bovary", "Gustave Flaubert" ]
];

webix.ui({
	view:"list",
	data:books, 
	datatype:"jsarray",
	template:"#data0# (#data1#)"
});    


@template:	api_config
@defined:	AtomDataLoader	
@descr:
For data type **other than json** the property is used in pair with the api/atomdataloader_datatype_config.md parameter.

@relatedapi:
	api/atomdataloader_datatype_config.md
@related:
	desktop/data_loading.md
@relatedsample:
	06_dataview/01_initialization/01_init.html
