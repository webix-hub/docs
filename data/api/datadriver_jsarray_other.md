jsarray
=============


@short:the parser for data of the JSArray format.
	

@type:object

@example:
$$('mylist').data.driver = webix.DataDriver.jsarray;
$$('mylist').load("data.js");
// it is the same as
$$('mylist').load("data.js","js");

@template:	api_config
@related:
	desktop/data_types.md
@relatedsample: 
	15_datatable/01_loading/01_inline_data.html
@defined:	DataDriver	
@descr:
The object contains methods and properties for correct processing JSArray data.

Component data can be loaded during initialization with datasource specified by the **data** property: 

~~~js
var jsarray_data = [
		[1,"The Shawshank Redemption",1994,678790,9.2,1],
		[2,"The Godfather",1972,511495,9.2,2]
];

webix.ui({
	view:"datatable",
	columns:[..],
	datatype:"jsarray",
	data: jsarray_data
});	
~~~

