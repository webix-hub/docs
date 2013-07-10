exportToPDF
=============

@short: exports data to a PDF file


@params:
* url	string		the url of a data export service

@example:
dtable.exportToPDF();

@relatedapi:
	api/ui.datatable_exporttoexcel.md
@related:
	datatable/export.md

@template:	api_method
	
@descr:

By default, the method uses the online export service available at  [http://Webixgrid.appspot.com/export/pdf](http://Webixgrid.appspot.com/export/pdf).

You can write your own solution ( server side support for PHP, JAVA, .NET). In this case, export will look like:

~~~js
dtable.exportToPDF("http://your-site.com/path/generate.php");
~~~