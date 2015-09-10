Data Export to PNG and Excel
==============================

This article is intended for the new export functionality added in version 3.0. For the details on the previously used functionality, see the article datatable/export_old.md.

[Datatable](datatable/index.md) and [Treetable](desktop/treetable.md) data can be exported to the following formats:

1. [PNG](datatable/export.md#exporttopng);
2. [Excel](datatable/export.md#exporttoexcel).

The components don't require any special configuration to be exported. 

For the treetable it is possible to add indentations for tree nodes: 

~~~js
// "value" column will be indented in the exported file
view:"treetable",
columns:[
	{ id:"id"},
	{ id:"value", exportAsTree:true },
	{ id:"chapter"}
]
~~~

{{sample 15_datatable/30_treetable/12_export.html}}

After that all you need is to apply an appropriate export method to this datatable or treetable. 

Export to PNG
-------------------

To export data from datatable or treetable into a PNG file, you need to call the **toPNG()** method. 
The method takes the following parameters:

- **id** - (string) the id of the exported view
- **name** - (string) optional, the name of an exported png file

For example, if you want to export a datatable to a PNG file, you need to initialize a datatable:

~~~js
{
	view:"datatable",
	id: "myDataTable",
	// datatable configuration
	...
}
~~~

and then call the toPNG() method with the datatble id as its parameter:

~~~js
webix.toPNG($$("myDataTable"));	
~~~

Export to Excel
-------------------

To export data from datatable/treetable into an Excel document, you need to call the **toExcel()** method.  
The method takes 2 parameters:

- **id** - (string, object)  the exported view or its id
- **options** - (object) optional, a set of configuration options that define what data will be displayed in the Excel file


For example, to export a datatable to an Excel document, you need to start with the view initialization:

~~~js
{
	view:"datatable",
	id: "myDatatable",
    // datatable configuration
    ...
}
~~~

And then the call of the toExcel() method should follow. The method takes the view object or its id as a parameter:

~~~js
webix.toExcel($$("myDataTable"));
~~~


Customizing Export
---------------------

The toExcel() method returns all data specified in the **columns** parameter of the datatable view. However, you may 
need to get data from other fields as well as restrict the number of fields in the export file. You can set the necessary
in the **columns** property of the toExcel() method.

All in all, export API allows:

- setting **columns** you'd like to see in the export file. 

~~~js
webix.toExcel($$("myDataTable"), {
	columns:{
		"rank":true,
		"title":true
	}
});

~~~

- defining custom parameters, such as **header**, **width** or **template** for data in the specified column: 

~~~js
webix.toExcel($$("myDataTable"), {
	columns:{
		"title":{header: "Title", width: 200, template: webix.template("#id#.#name#")},
        "year":{header: "Year", width: 100}
	}
});

~~~

The column will be rendered with the stated additional properties, which may differ from the component's parameters. 

- **including extra fields** into export by forming them right within the export function:

~~~
webix.toExcel(datatable, { 
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

"Custom1" (any name can be used) receives data from the **year** field even if it is not seen in this datatable but is presented in its dataset.
The field is rendered with **width**, **template** and **header** that will be the header of the corresponding column in the export table. 


@keyword:
	export, png, excel
    
@index:
- datatable/export_old.md