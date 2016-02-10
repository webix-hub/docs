Data Export/Import
=============================

SpreadSheet provides the possibility to export data from an Excel file and to import data to Excel, PDF ans PNG formats as well.

Data import
-----------

In order to import data from an Excel file into SpreadSheet, you can choose one of the ways below:

- specify the url of the chosen file in the Excel format:

~~~js
webix.ui({
	id:"ss1",
	view:"spreadsheet",
	url: "excel->../common/test.xlsx"
});
~~~

2) use the api/link/ui.proto_load.md method to load data to the component:

~~~js
webix.ui({
	id:"ss1",
	view:"spreadsheet",
	$$("ss1").load("excel->../common/test.xlsx") 
});
~~~


Data Export
--------------

You can export data from SpreadSheet into Excel, PDF or PNG formats. For any of these formats, you need to initialize a SpreadSheet first:

~~~js
webix.ui({
	id:"ss1",
	view:"spreadsheet",
	data: sheet1_data
});
~~~

Then call the corresponding method: toPDF, toPNG or toExcel to export data from SpreadSheet into the file of the necessary format:

for Excel:

~~~js
webix.toExcel("ss1");
~~~

for PDF:

~~~js
webix.toPDF("ss1");
~~~

for PNG:

~~~js
webix.toPNG("ss1");
~~~