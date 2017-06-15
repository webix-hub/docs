@link: api/atomdataloader_load.md

@short: loads a PDF file into the viewer

@params:

- url		string		the url of the PDF file to load, prefixed by the "binary" keyword that refers to the loading proxy
* type		string		(optional) the type of data to load: 'json' (default), 'xml', 'jsarray', 'csv'
* callback		function		(optional) the callback function

@example:
$$("pdfviewer").load("binary->url");

@relatedsample:
60_pro/10_viewers/06_pdf_load.html

@seolinktop: [open source html5 framework](https://webix.com)
@seolink: [pdf library](https://webix.com/widget/html5_pdf_viewer/)