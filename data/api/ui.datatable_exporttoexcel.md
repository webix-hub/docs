exportToExcel
=============

@short: exports data to an Excel file
	

@params:
* url	string		the url of a data export service

@example:
dtable.exportToExcel();

@relatedapi:
	api/ui.datatable_exporttopdf.md
@related:
	datatable/export.md

@template:	api_method
	
@descr:


You can write your own solution. There are server side support for PHP, JAVA, .NET ([check here](datatable/export.md#exporttoexcel) ). In this case, export will look like:

~~~js
dtable.exportToExcel("http://your-site.com/path/generate.php");
~~~
