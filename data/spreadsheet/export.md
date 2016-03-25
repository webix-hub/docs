Data Export
===========

SpreadSheet provides the possibility to export data to Excel, PDF ans PNG formats.

For any of these formats, you need to initialize a SpreadSheet first:

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

{{sample
65_spreadsheet/01_basic/06_export.html
}}