PDF Viewer
==============

PDF Viewer is a tool for displaying the content of PDF files on the screen.

<img style="display:block; margin-left:auto;margin-right:auto;" src="desktop/pdfviewer_front.png">

{{sample 60_pro/10_viewers/01_pdf.html}}

The viewer is recommended for use with the dedicated toolbar that contains buttons for paging and zooming. Viewer and toolbar are initialized in separate layout rows: 

- the first one with the toolbar;
- the second one with the viewer itself.

Thus, the default constructor of PDF viewer with toolbar looks as follows:

~~~js
webix.ui({
    rows:[
    	{ view:"pdfbar", id:"toolbar" },
        { 
        	view:"pdfviewer", 
            id:"pdf", 
            toolbar:"toolbar", 
            url:"binary->files/WebixDocs.pdf"
        }
   	]
});
~~~

Configuration parameters are:

- toolbar:
	 - **id** - (string) the id of the PDF toolbar;
- viewer:
	- **id** (string) - the id of the viewer;
	- **toolbar** (string) - the id of the related pdf toolbar;
	- **url** (string) - the url of the pdf file to browse in the viewer prefixed by "binary" keyword that refers to the [loading proxy](desktop/server_proxy.md).
    
####PDFbar structure    
    
Toolbar is supplied with the following fully functional controls: 

- navigation arrows (previous and next page);
- current page label;
- "all pages" label;
- zoom in and out icons;
- zoom mode selector;
- download button.
    
If you need, you can use the viewer and the toolbar separately, by using their public API methods.


PDF viewer API reference
---------------------

###Methods

####load()

loads a pdf file into the viewer

parameters:

- url - (string) the url of the pdf file to load prefixed by "binary" keyword that refers to the [loading proxy](desktop/server_proxy.md)	

~~~js
$$("pdfviewer").load("binary->url");
~~~

####parse()

parses the contents of uploaded file or base64 string into the viewer:

{{snippet
Base64 string
}}
~~~js
var base64data = ..decoded base64 data..;
$$("pdf").parse({data:base64data});
~~~

{{snippet
Uploaded file
}}
~~~js
{view:"uploader", width:200, height:45, type:"form", value:"Choose a PDF file to upload", accept:"application/pdf", on:{
	onBeforeFileAdd:function(upload){
		$$("pdf").parse(upload.file);
	return false;
	}
}}
~~~

{{sample 60_pro/10_viewers/05_pdf_upload.html }}

####nextPage()

renders the page that follows the viewed one

~~~js
$$("pdfviewer").nextPage();
~~~

####prevPage()

renders the page that precedes the viewed one

~~~js
$$("pdfviewer").prevPage();
~~~


####renderPage()

renders the specified page in the viewer

parameters:

- page - (number) the number of the page

~~~js
$$("pdfviewer").renderPage(2);
~~~

####setScale()

sets a new value for a zooming scale and renders current page with the new scale

parameters:

- scale - (string, number) new scale value 
- update - (boolean) if true, update scale value on the related toolbar

For legal values check **scale** property below.

~~~js
$$("pdfviewer").setScale(0.4, true);
// or
$$("pdfviewer").setScale('page-actual', true);
~~~

####zoomIn()

zooms the viewed page in 

~~~js
$$("pdfviewer").zoomIn();
~~~

####zoomOut()

zooms the viewed page out

~~~js
$$("pdfviewer").zoomOut();
~~~

####download()

downloads viewer contents as PDF file

~~~js
$$("pdfviewer").download();
~~~


###Events

####onBeforeLoad

fires before loading of the PDF file begins

~~~js
$$("pdfviewer").attachEvent("onBeforeLoad", function(){ ... });
~~~

####onAfterLoad

fires after the PDF file is fully loaded

~~~js
$$("pdfviewer").attachEvent("onAfterLoad", function(){ ... });
~~~

####onDocumentReady

fires after the PDF file is fully loaded and the initial page is rendered

~~~js
$$("pdfviewer").attachEvent("onDocumentReady", function(){ ... });
~~~

####onPageRender

fires after a page is rendered in the viewer body

parameters:

- pageNum  - (number) the number of the page

~~~js
$$("pdfviewer").attachEvent("onPageRender", function(pageNum){ ... });
~~~

####onScaleChange

fires after the page has been zoomed

parameters: 

- scale - (number) new value of the scale
- update - (boolean) flag that indicates whether the related PDF toolbar should be updated

~~~js
$$("pdfviewer").attachEvent("onScaleChange", function(scale, update){ ... });
~~~

###Properties

####scale

current scale value. It can be set as:

1) string value:

- 'page-actual' - the page scale is equal to 100% 
- 'page-width' - the page size is extended to the width of the view
- 'page-height' - the page size is extended to the height of the view
- 'page-fit' - the page's size is adjusted to the size of the view area, width or height
- 'auto' - the page's size is automatically adjusted to the size of the view area

String values will be automatically calculated into numeric values. 

2) number value:

- integer number: 1 is equal to 100%
- float number: 0.5 is equal to 50%

~~~js
//set scale
$$("pdfviewer").define("scale", "page-width");
//re-render viewer
$$("pdfviewer").renderPage($$("pdfviewer").$pageNum);
~~~

####Other

It is not recommended to change these properties.

####$pageNum

the number of a currently visible page:

~~~js
$$("pdfviewer").$pageNum;
~~~

####$numPages

total number of pages in the document:

~~~js
$$("pdfviewer").$numPages;
~~~


PDF toolbar API reference
-------------------


####setMasterPage()

sets the page to show in the viewer 

- page - (string, number) the value of the page that should be displayed in the viewer

Possible values are "prev", "next" or page number.

~~~js
$$("toolbar").setMasterPage("prev");
// or
$$("toolbar").setmasterPage(3);
~~~

####setMasterScale()

applies a new scale value to the viewer

parameters:

- scale - (string, number) a new scale value

The possible values of the "scale" parameter coincide with the same parameter of the setScale() method.

~~~js
$$("toolbar").setMasterScale(0.3);
// or
$$("toolbar").setMasterScale('page-actual');
~~~

####setPage()

sets the current page in the toolbar

parameters:

- page - (number) the number of the page that should be displayed

~~~js
$$("toolbar").setPage(2);
~~~

####setScale()

sets a new value for the toolbar scale

parameters:

- scale - (string, number) a new scale value. For legal values check **scale** property above.

~~~js
$$("toolbar").setScale(0.4);
// or
$$("toolbar").setScale('page-width');
~~~

####setValues()

sets values of toolbar controls, namely the number of pages in the document and the scale in use

parameters:

- pages - (number) the number of pages
- scale - (string, number) the scale value

~~~js
$$("toolbar").setValues(15,"auto-width");
//or
$$("toolbar").setValues(10,"page-actual");
~~~

####zoom()

applies zooming to the viewer (in or out); it is called on a toolbar button click ("+" or "-")

parameters:

- direction - (string) the direction of zooming - "in" or "out"

~~~js
$$("toolbar").zoom("in");
~~~

####download()

applies downloading to the viewer to get its contents as PDF file

~~~js
$$("toolbar").download();
~~~


@edition:pro

@spellcheck:pdf, PDFbar