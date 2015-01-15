url
=============


@short:
	the url the component will use to load data after its initialization

@type: string
@example:
webix.ui({
    datatype:"xml",
	url:"data.xml"
	...
});

@relatedapi:
	api/atomdataloader_load.md
	api/atomdataloader_parse.md
	api/atomdataloader_data_config.md
	api/atomdataloader_datatype_config.md
@related: 
	desktop/data_loading.md
@relatedsample:
	06_dataview/01_initialization/02_url_loading.html

@template:	api_config
@defined:	AtomDataLoader	
@descr:


 Used in pair with the api/link/ui.datatable_datatype_config.md parameter.  If api/link/ui.datatable_datatype_config.md isn't provided, the component will expect data in JSON format. 
 