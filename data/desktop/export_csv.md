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

- setting **columns** you'd like to see in the export file. There are two ways to set the custom columns for export:

You can provide an associative array (hash) with column ids as keys. Their values can be either *boolean* for default 
parameters (taken from component configuration) or *object* for custom parameters:

~~~js
webix.toCSV($$("table"), {
	columns:{
		"rank":true,
		"title":{ header:"Title", width:250}
	}
});
~~~

With such a notation the order of the columns in the resulting file is defined automatically with a *for.. in* loop. Sometimes it may be unreliable, e.g.:

~~~js
webix.toCSV($$("table"), {
	columns:{
		"rank":true,
		"title":{ header:"Title", width:250},
        "2016":{ header:"Votes in 2016"},
        "2015":{ header:"Votes in 2015"}
	}
});
~~~

The order in the export file will be: "2015", "2016", "rank", "title" since numbers are processed first and come in the ascending order. 

To ensure the strict order of columns in the resulting file, you can specify the columns as a plain array:

~~~js
webix.toCSV($$("table"), {
	columns:[
    	{ id:"rank" },
    	{ id:"title", header:"Title", width:250},
    	{ id:"2016", header:"Votes in 2016"},
        { id:"2015", header:"Votes in 2015"}
	]
});
~~~

Note that if you want to get the default column's parameters in this case, you should specify only the column's id (see the "rank" column).


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

###Customizing Export to CSV for Hierarchical Components

In addition to standard export options, the API allows cusomizing the output data of hierarchical components ([Tree](datatree/index.md) and
[Treetable](desktop/treetable.md)) in the following way:

- **not rendering "hyphens" before child nodes** in tree-like structures by using the *plainOutput* option with the *true* value

~~~js
webix.toCSV($$("mytreetable"), {
	columns:{
		plainOutput:true
	}
});
~~~

- **rendering separate columns for data on different hierarchy levels**, thus rendering data in a table: 

~~~js
webix.toCSV($$("mytreetable"), {
	flatTree:{
		id:"value",
		columns:[
			{ header:"Title" },
			{ header:"Section" },
			{ header:"Subsection" }
		]
	}
});
~~~

The **flatTree** property object includes the following options: 

- id (*string*) -  data property which will be rendered in columns
- columns (*array*) - array with columns to which the above data property will be distributed according to the hierarchy level
- fill (*boolean*) - optional. If true, allows filling child records with parent data for each child node

{{sample 15_datatable/30_treetable/12_export.html}}