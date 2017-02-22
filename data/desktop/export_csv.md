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

- **stripping HTML tags** from the cells: 

~~~js
webix.toCSV($$("mylist"), {
     filterHTML:true
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

- defining custom **header** or **template** parameter for data in the specified column: 

~~~js
webix.toCSV($$("mylist"), {
	columns:{
		"title":{header: "Title", template: webix.template("#id#.#name#")},
        "year":{header: "Year"}
	}
});
~~~

The column will be rendered with the stated additional properties, which may differ from the component's parameters.

- **not rendering "hyphens" before child nodes** in tree-like structures by using the *plainOutput* option with the *true* value

~~~js
webix.toCSV($$("mytreetable"), {
	columns:{
		plainOutput:true
	}
});
~~~

- **rendering a template** set in the widget's dataset via setting the *rawValues* option to *false*

~~~js
webix.ui({
  rows:[
    { 
      view:"datatable", 
      data:grid_data, 
      columns:[{id:"title", fillspace:true, template:"Film #title#"}]
    }
  ]
});

webix.toCSV($$("$datatable1"),{
	columns:{
		rawValues:false
	}
});
~~~

- **including extra fields** into export by forming them right within the export function:

~~~js
webix.toCSV($$("mylist"), { 
	columns:{ 
		Custom1:{
			template:function(obj){
				return "Year " + obj.year;
			},
			header:"Year"
		},
        //other columns
		title:true
	}
});
~~~

"Custom1" (any name can be used) receives data from the **year** field even if it is not seen in this component but is presented in its dataset.
The field is rendered with **template** and **header** that will be the header of the corresponding column in the resulting table.


- setting the desired columns' delimiter using **webix.csv.delimiter.cols** 

~~~js
webix.csv.delimiter.cols = ",";
~~~

{{sample 19_api/09_export_csv.html}}