Data Components Export to CSV
=========================

You can export Webix data components to the CSV format.

The components don't require any special configuration to be exported.

{{note
The described functionality is available both in Standard and Pro versions, but pay attention that the IE browser is supported starting from version 10.
}}


To export data from a data component into a CSV document you need to call the api/_tocsv.md method. The method takes 2 parameters:

- **id** - (string, object) id or object of the exported view 
- **options** - (object) optional, a set of configuration options that define what data will be displayed in the CSV file

For example, to export a list to a CSV document, you need to call of the toCSV() method that takes the view object or its id as a parameter:

~~~js
webix.ui({
	view:"list",
	id: "mylist",
    // list configuration
    ...
});

webix.toCSV($$("mylist"));
~~~

{{sample 19_api/09_export_csv.html}}

Customizing Export to CSV
-------------------------

The api/_tocsv.md method returns all data specified in the dataset of a component, or in the **columns** parameter of the DataTable view. 
The data is exported into a CSV document with "Data" name by default. 

However, you may need to get some particular data, or customize the file name. 

**Export API allows** 

- providing a custom **filename**: 

~~~js
webix.toCSV($$("table"), {
     filename: "table"    
});
~~~

- setting **columns** you'd like to see in the export file:

~~~js
webix.toCSV($$("mylist"), {
	columns:{
		"rank":true,
		"title":true
	}
});
~~~

- defining custom **header** parameter for data in the specified column: 

~~~js
webix.toExcel($$("mylist"), {
	columns:{
		"title":{header: "Title"},
        "year":{header: "Year"}
	}
});
~~~

- setting the desired columns' delimiter using **webix.csv.delimiter.cols** 

~~~js
webix.csv.delimiter.cols = ",";
~~~

{{sample 19_api/09_export_csv.html}}