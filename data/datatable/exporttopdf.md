Export to PDF
=================

To export data from datatable/treetable into a PDF file, you need to call the api/_topdf.md method. The method takes the next parameters:

- **id** - (string, object) id or object of the exported view 
- **name** - (string) optional, name of an exported png file

For example, if you want to export a list to a PDF file, you need to call the toPDF() method with the list id as a parameter:

~~~js
{
    view:"datatable",
    id: "myDatatable",
    // datatable configuration
    ...
}
~~~

And then the call of the toPDF() method should follow. 

~~~js
webix.toPDF($$("myDataTable"));
~~~

{{sample 15_datatable/10_export/06_pdf.html }}

Customizing Export to PDF
-------------------------

The toPDF() method returns all data specified in the **columns** parameter of the datatable view. However, you may 
need to get data from other fields as well as restrict the number of fields in the export file. You can set the necessary fields
in the **columns** property of the toPDF() method.

**Export API allows** 

- setting **columns** you'd like to see in the export file 

~~~js
webix.toPDF($$("myDataTable"), {
	columns:{
		"rank":true,
		"title":true
	}
});

~~~

- defining custom parameters, such as **header**, **width** or **template** for data in the specified column: 

~~~js
webix.toPDF($$("myDataTable"), {
	columns:{
		title:{ header: "My title", width: 200, template: webix.template("#id#.#title#")},
		year:{ header:"Year", width:150}
	}
});
~~~

The column will be rendered with the stated additional properties, which may differ from the component's parameters. 

- **including extra fields** into export by forming them right within the export function:

~~~js
webix.toPDF(datatable, { 
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


- specifying the **autowidth** parameter to define the columns' width automatically. By default, the paper size of a PDF document is A4. 
If you set the autowidth property to true, columns will be able to have any possible width that will define the width of a PDF page

~~~js
webix.toPDF($$("myDataTable"), {
	autowidth:true
});
~~~

- setting the **orientation** parameter which defines the PDF page orientation: *portrait* (default) or *landscape*

~~~js
webix.toPDF($$("myDataTable"), {
	orientation:"landscape"
});
~~~

- specifying the **header** and **headerImage** parameters to display some text or image in the header of the export file

~~~js
// setting a custom text in the header of the PDF file
webix.toPDF($$("myDataTable"), {
	header:"This document was made with Webix library. http://webix.com"
});

// setting a custom image in the header of the PDF file
webix.toPDF($$("myDataTable"), {
	headerImage:"../common/logo.jpg",
});
~~~


{{sample 15_datatable/10_export/07_pdf_config.html}}