Export to Excel
===================

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

And then the call of the toExcel() method should follow. 

~~~js
webix.toExcel($$("myDataTable"));
~~~

{{editor http://webix.com/snippet/1f9ed76b	Export to Excel}}


Customizing Export
---------------------

The toExcel() method returns all data specified in the **columns** parameter of the datatable view. However, you may 
need to get data from other fields as well as restrict the number of fields in the export file. You can set the necessary fields
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
