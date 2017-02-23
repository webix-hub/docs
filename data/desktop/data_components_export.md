Data Components Export to Excel
==============================

You can export Webix data components to the Excel format.

The components don't require any special configuration to be exported.


{{note
The described functionality is available both in Standard and Pro versions, but pay attention that the IE browser is supported starting from version 10.
}}


To export data from a data component into an Excel document you need to call the api/_toexcel.md method. The method takes 2 parameters:

- **id** - (string, object)  id or object of the exported view 
- **options** - (object) optional, a set of configuration options that define what data will be displayed in the Excel file


For example, to export a list to an Excel document, you need to call of the toExcel() method that takes the view object or its id as a parameter:

~~~js
webix.ui({
	view:"list",
	id: "mylist",
    // list configuration
    ...
});

webix.toExcel($$("mylist"));
~~~

{{sample 19_api/06_export_excel.html}}


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

Customizing Export to Excel
-------------------------

The api/_toexcel.md method returns all data specified in the dataset of a component, or in the **columns** parameter of the DataTable view. 
The data is exported into an Excel document with "Data" name and "Data" sheet name. 

However, you may need to get some particular data, or customize file and sheet names. 

**Export API allows** 

- providing a custom **filename** and sheet **name**: 

~~~js
webix.toExcel($$("table"), {
     filename: "table", // for filename
     name: "Films" // for sheet name
});
~~~

{{sample 15_datatable/10_export/01_excel.html}}

- **stripping HTML tags** from the cells: 

~~~js
webix.toExcel($$("table"), {
     filterHTML:true
});
~~~

- setting **columns** you'd like to see in the export file:

~~~js
webix.toExcel($$("mylist"), {
	columns:{
		"rank":true,
		"title":true
	}
});

~~~

- defining custom parameters, such as **header**, **width** or **template** for data in the specified column: 

~~~js
webix.toExcel($$("mylist"), {
	columns:{
		"title":{header: "Title", width: 200, template: webix.template("#id#.#name#")},
        "year":{header: "Year", width: 100}
	}
});

~~~

The column will be rendered with the stated additional properties, which may differ from the component's parameters. 

- **not rendering "hyphens" before child nodes** in tree-like structures by using the *plainOutput* option with the *true* value

~~~js
webix.toExcel($$("mytreetable"), {
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

webix.toExcel($$("$datatable1"),{
	columns:{
		rawValues:false
	}
});
~~~


- **including extra fields** into export by forming them right within the export function:

~~~
webix.toExcel($$("mylist"), { 
	columns:{ 
		Custom1:{
			template:function(obj){
				return "Year " + obj.year;
			},
			width:50,
			header:"Year"
		},
        //other columns
		title:true
	}
});
~~~

"Custom1" (any name can be used) receives data from the **year** field even if it is not seen in this component but is presented in its dataset.
The field is rendered with **width** and **template** as well as **header** that will be the header of the corresponding column in the resulting table. 

{{sample 19_api/06_export_excel.html}}
