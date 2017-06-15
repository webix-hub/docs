Export to Excel
===================

To export data from datatable/treetable into an Excel document, you need to call the api/_toexcel.md method.  
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

And then the call of the toExcel() method should follow. 

~~~js
webix.toExcel($$("myDataTable"));
~~~

{{sample 15_datatable/10_export/01_excel.html}}

Customizing Export
---------------------

The toExcel() method returns all data specified in the **columns** parameter of a datatable view. The data is exported into an Excel document with "Data" name and "Data" sheet name.

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


@seolinktop: [best ui framework](https://webix.com)
@seolink: [ui datagrid](https://webix.com/widget/datatable/)