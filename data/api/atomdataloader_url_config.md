url
=============


@short:
	the URL which the component will use to load data after its initialization

@type: string | api/_proxy.md
@example:
webix.ui({
  	datatype: "xml",
	url: "data.xml"
	...
});

@descr: The URL can be a string pointing to an actual URL, a string starting with a "connector->", or a api/_proxy.md object. See for example [how to load data into a DataTable from a GraphQL proxy object](https://snippet.webix.com/om5pqfnl).

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


Used in conjunction with the api/link/ui.datatable_datatype_config.md parameter.  If api/link/ui.datatable_datatype_config.md isn't provided, the component will expect data in JSON format.
