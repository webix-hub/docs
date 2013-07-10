datatype
=============


@short:
	the type of loaded data

@values:
- JSON (default)
- XML 
- JSArray
- CSV

@type: string
@example:
webix.ui({
	view:"datatable",
	url:"data.xml",
	datatype:"xml"
});

@template:	api_config
@defined:	AtomDataLoader	
@relatedsample:
	06_dataview/03_loading/01_xml.html
@related:
	desktop/data_loading.md
    desktop/data_types.md
@relatedapi:
	api/atomdataloader_data_config.md
	api/atomdataloader_url_config.md
@descr:

With JSON data type you can omit this property.



