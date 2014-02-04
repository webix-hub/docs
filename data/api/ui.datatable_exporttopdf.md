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
You can write your own server-side solution PHP, JAVA, .NET ([check here](datatable/export.md#exporttopdf)). In this case, export will look like:

~~~js
dtable.exportToPDF("http://your-site.com/path/generate.php");
~~~