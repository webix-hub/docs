Data Export to PNG and Excel
==============================

You can export Webix data components to the following formats:

1. [PNG](desktop/export.md#exporttopng)
2. [Excel](desktop/export.md#exporttoexcel)

The components don't require any special configuration to be exported.


{{note
The described functionality is available both in Standard and Pro versions, but pay attention that the IE browser is supported starting from version 10.
}}

Export to PNG
-------------------

To export data from a data component into a PNG file, you need to call the **toPNG()** method. The method takes the next parameters:

- **id** - (string) the id of the exported view
- **name** - (string) optional, the name of an exported png file

For example, if you want to export a chart to a PNG file, you need to initialize a chart:

~~~js
{
	view:"chart",
	id: "myChart",
	// chart configuration
	...
}
~~~

and then call the toPNG() method with the chart id as its parameter:

~~~js
webix.toPNG($$("myChart"));	
~~~

{{sample 60_pro/03_api/05_export_png.html }}


Export to Excel
-------------------

To export data from a data component into an Excel document you need to call the **toExcel()** method. The method takes 2 parameters:

- **id** - (string, object)  the exported view or its id
- **options** - (object) optional, a set of configuration options that define what data will be displayed in the Excel file:


For example, to export a list to an Excel document, you need to start with the view initialization:

~~~js
{
	view:"list",
	id: "mylist",
    // list configuration
    ...
}
~~~

And then the call of the toExcel() method should follow. The method takes the view object or its id as a parameter:

~~~js
webix.toExcel($$("mylist"));
~~~

{{sample 60_pro/03_api/06_export_excel.html}}


Customizing Export to Excel
-------------------------

The toExcel() method returns all data specified in the dataset of a component without any data formatting. However, you may 
need to get data from some particular fields. 


**Export API allows** 

- setting **columns** you'd like to see in export. 

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
webix.toExcel(list, { 
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
The field is rendered with **width**, **template** and **header** that will be the header of the corresponding column in the export table. 

{{sample 60_pro/03_api/06_export_excel.html}}
