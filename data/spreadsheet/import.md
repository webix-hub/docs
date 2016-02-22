Excel File Import
==================

You can easily import data from an Excel file into SpreadSheet. For this purpose, you can choose one of the ways below:

- specify the url of the chosen file in the Excel format:

~~~js
webix.ui({
	id:"ss1",
	view:"spreadsheet",
	url: "excel->../common/test.xlsx"
});
~~~

- use the api/link/ui.proto_load.md method to load data to the component:

~~~js
webix.ui({
	id:"ss1",
	view:"spreadsheet",
});

$$("ss1").load("excel->../common/test.xlsx"); 
~~~

{{sample
65_spreadsheet/01_basic/05_excel.html
}}