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

Then call the corresponding method: api/_topdf.md, api/_topng.md or api/_toexcel.md to export data from SpreadSheet into the file of the necessary format:

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
65_spreadsheet/02_api/06_export.html
}}

Exporting Data Offline
---------------------

The dependencies which are used for providing export possibilities are generally taken from Webix CDN online catalog. 
If you need to implement data export offline, you should complete the following steps:

- download the package with CDN-files from [https://github.com/webix-hub/cdn-extras](https://github.com/webix-hub/cdn-extras)
- rename the folder to "extras" and move it the desired directory
- set the path to the local CDN repository as 

~~~js
webix.cdn = "/local_folder";
~~~

Note that specifying the path to the local CDN repository has some peculiarities:

1) in case you set the path relative to the current page, it should be specified as:

~~~js
webix.cdn = "../../../../local_folder"; 
~~~

2) the absolute path to the repository should be specified as follows:

~~~js
webix.cdn = "http://localhost/local_folder";
~~~
