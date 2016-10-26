parse
=============




@short:
	loads data to the component from an inline data source

@params:
- data		string, object		the data to add
- type		string		the data type: 'json' (default), 'xml', 'csv', 'jsarray'


	
@example:
webix.ui({
	id:"data",
	view:"dataview",
	...
});

var str = "<data><item id='1'><title>The Lord of the Rings</title>"+
"<year>2003</year></item>";
str += "<item id='2'><title>Star Wars: Episode V</title>"+
"<year>1980</year></item></data>";

$$("data").parse(str,"xml");

@descr:
If you want to parse data in addition to the existing dataset, specify **position** of parsing, 
namely the **index** from which you insert new data:

~~~js
$$("datatable").parse({
   pos: $$("datatable").count(), //number of records will be right the last index +1
   data:dataset
});
~~~

@relatedapi:
	api/atomdataloader_load.md
	api/atomdataloader_data_config.md
	api/atomdataloader_url_config.md
	api/atomdataloader_datatype_config.md
    
@relatedsample:
	06_dataview/03_loading/02_json.html
    06_dataview/03_loading/01_xml.html
@related: 
	desktop/data_loading.md
@template:	api_method
@defined:	AtomDataLoader	



