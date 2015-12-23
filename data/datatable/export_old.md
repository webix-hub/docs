Data Export to PDF and Excel
==============================

{{note
This is an outdated article about export of Datatable to PDF and Excel. This functionality will be deprecated starting from the version 3.2. 
To get the actual information on Datatable export, read the article datatable/export.md.
}}

[Datatable](datatable/index.md) and [Treetable](desktop/treetable.md) data can be exported to the following formats:

1. [PDF](datatable/export.md#exporttopdf);
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

Export to PDF
-------------------

To export data from datatable or treetable into a PDF document you need to call method api/ui.datatable_exporttopdf.md. 
For example, if you add a button by clicking on which the grid will start exporting, then its code will look like this: 

~~~html
<input type="button" value="Get as PDF" style='width:400px;margin:25px;' 
onclick="grid.exportToPDF();">
~~~



Above solution uses online data export service, but you can configure a local copy as well - you can download and install the Export package. It must be unpacked inside the root of your web server.

The latest packages for installation can be found here:

- <a href="http://docs.webix.com/packages/export/grid-pdf-php.zip">PHP package</a> 
- <a href="http://docs.webix.com/packages/export/grid-pdf-java.zip">Java package</a> 
- <a href="http://docs.webix.com/packages/export/grid-pdf-net.zip">ASP .NET package</a> 

The code will look like this:

~~~js
grid.exportToPDF("generate.php"); //provide the correct relative path
~~~

{{sample 15_datatable/10_export/04_pdf_server.html}}

Export to Excel
-------------------

To export data from datatable/treetable into an Excel document you need to call method api/ui.datatable_exporttoexcel.md. For example, if you add a button by clicking on which the grid will start exporting, then its code will look like this: 

~~~html
<input type="button" value="Get as PDF" style='width:400px;margin:25px;' 
onclick="grid.exportToExcel();">
~~~



Above solution uses online data export service, but you can configure a local copy as well - you can download and install the Export package. It must be unpacked inside the root of your web server.

- <a href="http://docs.webix.com/packages/export/grid-excel-php.zip">PHP package</a> 
- <a href="http://docs.webix.com/packages/export/grid-excel-java.zip">Java package</a> 
- <a href="http://docs.webix.com/packages/export/grid-excel-net.zip">ASP .NET package</a> 

The code will look like this:

~~~js
grid.exportToExcel("generate.php"); //provide correct relative path
~~~

{{sample 15_datatable/10_export/03_excel_server.html}}

Customizing Export
---------------------

Both api/ui.datatable_exporttopdf.md and api/ui.datatable_exporttoexcel.md return data from **all currently visible columns** of your datatable without any data formatting (as it is in the dataset). However, you may 
need to get data from other fields as well as restrict the number of fields in the export file, or apply some format to data values. 

All customizing happens within the needed export function:

~~~js
//in case you use online service
grid.exportToExcell(null, {..setting custom values..});

//in case you use local version of export script
grid.exportToExcell("generate.php", {..setting custom values..});
~~~

**Export API allows** 

- setting **columns** you'd like to see in export (including **ID** column). Here column **names** should be specified:

~~~js
grid.exportToExcel(null, {
	id:true, // note where id export is set
	columns:{ 
		customer:true,
		region_id:true,
		country_id:true
	}
});
~~~

- defining a custom **template** and **width** for data from specified column: 

~~~js
grid.exportToPDF(null, {
	id:true, 
	columns:{ 
		customer:{ 
			template:"#customer#",
			width:500
        }
    }
});   
~~~

The column will be rendered with the stated template and width, which may differ from datatable parameters. 

- **including extra field** into export by forming them right within the export function:

~~~
grid.exportToPDF(null, { 
	columns:{ 
		custom1:{
			template:function(obj){
				return "Year " + obj.year;
			},
			width:50,
			header:[{ text:"Date" }]
		},
        //other columns
		title:true
	}
});
~~~

"Custom1" (any name can be used) receives data from **year** field even if it is not seen in this datatable but is presented in its dataset. The field is rendered with **width**, **template** and **header** that 
will be the header of the corresponding column in the export table. 

{{sample 15_datatable/10_export/05_configuration.html}}

Configuration
-----------------------
You can define how datatable will look in PDF or Excel document after it is exported,
configuring available options in the server side code. For these needs, please download the local script version. 

In addition, you gain extra security with local scripts as well as get rid of a text that shows download source. 

@keyword:
	export, pdf, excel