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


Customizing Export to Excel
-------------------------

The toExcel() method returns all data specified in the dataset of a component, or in the **columns** parameter of a datatable view. 
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
