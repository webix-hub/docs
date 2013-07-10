Data export to PDF, Excel
==============================
DataTable data can be exported to the following formats:

1. [PDF](datatable/export.md#exportexporttopdf);
2. [Excel](datatable/export.md#exportexporttoexcel).

Export to PDF
-------------------
To export data from DataTable into a PDF document you need to call method api/ui.datatable_exporttopdf.md. For example, if you add a button by clicking on which the grid will start exporting, then its code will look like this: 
~~~html
<input type="button" value="Get as PDF" style='width:400px;margin:25px;' 
onclick="grid.exportToPDF();">
~~~

{{sample 15_datatable/10_export/01_pdf.html }}

above solution uses online data export service, but you can configure a local copy as well - you can download and install the Export package. It must be unpacked inside the root of your web server.

The latest packages for installation can be found here:

- <a href="http://Webix.com/x/download/regular/grid-pdf-php.zip">PHP package</a> 
- <a href="http://Webix.com/x/download/regular/grid-pdf-java.zip">Java package</a> 
- <a href="http://Webix.com/x/download/regular/grid-pdf-net.zip">ASP .NET package</a> 


Export to Excel
-------------------
To export data from DataTable into an Excel documentyou need to call method api/ui.datatable_exporttoexcel.md. For example, if you add a button by clicking on which the grid will start exporting, then its code will look like this: 
~~~html
<input type="button" value="Get as PDF" style='width:400px;margin:25px;' 
onclick="grid.exportToExcel();">
~~~

{{sample 15_datatable/10_export/02_excel.html }}

above solution uses online data export service, but you can configure a local copy as well - you can download and install the Export package. It must be unpacked inside the root of your web server.

- <a href="http://Webix.com/x/download/regular/grid-excel-php.zip">PHP package</a> 
- <a href="http://Webix.com/x/download/regular/grid-excel-java.zip">Java package</a> 
- <a href="http://Webix.com/x/download/regular/grid-excel-net.zip">ASP .NET package</a> 



Configuration
-----------------------
You can define how DataTable will look in PDF or Excel document after it is exported,
configuring available options in the server side code.

@keyword:
	export, pdf, excel