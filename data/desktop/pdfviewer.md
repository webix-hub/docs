PDF Viewer
==============

{{pronote
The widget is available in the **Webix Pro** edition.
}}

API Reference
--------------

- [Methods, properties and events](api/refs/ui.pdfviewer.md)
- [Samples](http://docs.webix.com/samples/60_pro/10_viewers/)


Overview
------------

PDFViewer is a tool for displaying the content of PDF files on the screen.

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
	- **toolbar** (string) - the id of the related PDF toolbar;
	- **url** (string) - the URL of the PDF file to browse in the viewer prefixed by "binary" keyword that refers to the [loading proxy](desktop/server_proxy.md).
    
PDFbar Structure   
----------------
    
Toolbar is supplied with the following fully functional controls: 

- navigation arrows (previous and next page);
- current page label;
- "all pages" label;
- zoom in and out icons;
- zoom mode selector;
- download button.
    
If you need, you can use the viewer and the toolbar separately, by using their public API methods.


PDF Toolbar API Reference
-------------------


####setMasterPage()

sets the page to show in the viewer 

- page - (string, number) the value of the page that should be displayed in the viewer

Possible values are "prev", "next" or page number.

~~~js
$$("toolbar").setMasterPage("prev");
// or
$$("toolbar").setMasterPage(3);
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

##Loading Data to PDF Viewer

There are three possible ways of loading data to PDF viewer:

- specifying the needed file directly in the viewer constructor by using the **url** parameter:

~~~js
{
	view:"pdfviewer", 
    url:"binary->files/data.pdf"
}
~~~

{{sample 60_pro/10_viewers/01_pdf.html}}

- calling the **load** method with the file name as a parameter

~~~js
{ view:"pdfviewer", id:"pdf"},
...
$$("pdf").load("binary->files/data.pdf");
~~~

{{sample 60_pro/10_viewers/06_pdf_load.html}}


**Binary** [proxy](desktop/server_proxy.md) is used for loading the file, which allows getting its contents as ArrayBuffer.


- parsing uploaded file data with the help of the **parse** method

~~~js
{
	view:"uploader", 
	width:200, 
	height:45, 
	type:"form", 
	value:"Choose a PDF file to upload", 
	accept:"application/pdf", 
	on:{
		onBeforeFileAdd:function(upload){
			$$("pdf").parse(upload.file);
				return false;
		}
	}
}
~~~

{{sample 60_pro/10_viewers/05_pdf_upload.html }}


@metadescr: Learn how to use the PDF Viewer widget for displaying the content of a PDF file on the page. 
@doctitle: The PDF Viewer widget documentation: overview and usage.

@edition:pro

@spellcheck:pdf, PDFbar

@seolinktop: [javascript component library](https://webix.com)
@seolink: [pdf viewer library](https://webix.com/widget/html5_pdf_viewer/)