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

By default, the method uses the online export service available at  [http://Webixgrid.appspot.com/export/excel](http://Webixgrid.appspot.com/export/excel).

You can write your own solution. There are server side support for PHP, JAVA, .NET (check [http://Webix.com/docs/products/goodies/index.shtml](http://Webix.com/docs/products/goodies/index.shtml) ). In this case, export will look like:

~~~js
dtable.exportToExcel("http://your-site.com/path/generate.php");
~~~
