json
=============


@short: the parser for data of the JSON format.
	

@type:object

@example:
$$('mylist').data.driver = webix.DataDriver.json;
$$('mylist').load("data.json");
// it is the same as
$$('mylist').load("data.json","json");

@template:	api_config
@relatedsample:
	17_datatree/01_loading/01_json_data.html
@related:
	desktop/data_types.md
    desktop/custom_data_types.md
@defined:	DataDriver	
@descr:
The object contains methods and properties for correct processing JSON data. Processing logic can be changed, which allows using [custom tags for hierarchical data](desktop/custom_data_types.md). 

Since json is the **default** data type for Webix components, the **datatype** parameter is optional. 

Component data can be loaded during initialization with datasource specified by the data property:

~~~js
var json_data = [
		{ id:1, title:"The Shawshank Redemption", year:1994, votes:678790 },
		{ id:2, title:"The Godfather", year:1972, votes:511495 }
];
 
webix.ui({
    view:"datatable",
    columns:[..],
    data: json_data
});
~~~




