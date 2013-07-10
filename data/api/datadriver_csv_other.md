csv
=============


@short:the parser for data of the CSV format.
	

@type:object

@example:
$$('mylist').data.driver = webix.DataDriver.csv;
$$('mylist').load("data.csv");
// it is the same as
$$('mylist').load("data.csv","csv");

@template:	api_config
@defined:	DataDriver	
@relatedsample:
	15_datatable/01_loading/01_inline_data.html
    08_chart/01_initialization/03_load_csv.html
@related:
	desktop/data_types.md
    helpers/data_drivers.md
@relatedapi:
	api/link/ui.datatable_delimiter_config.md
	
@descr:
The object contains methods and properties for correct processing CSV data. The default logic can be customized by including **demiliter** into the component constructor.

Component data can be loaded during initialization with datasource specified by the **data** property: 

~~~js
var csv_data = '1,The Shawshank Redemption,1994,678790,9.2,1\n
				2,The Godfather,1972,511495,9.2,2';

webix.ui({
	view:"datatable",
	columns:[..],
	datatype:"csv",
	data:csv_data
});	
~~~