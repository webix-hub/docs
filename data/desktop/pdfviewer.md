PDF Viewer
==============

PDF Viewer is an tool which is used for displaying the content of PDF files on the screen.

<img src="desktop/pdfviewer_front.png">

{{sample 60_pro/10_viewers/01_pdf.html}}

The default constructor of PDF viewer looks as follows:

~~~js
{ 
	view:"pdfviewer", 
    id:"pdf", 
    toolbar:"toolbar", 
    url:"files/WebixDocs.pdf"
}
~~~

Configuration parameters are:

- **id** (string) - the id of the viewer;
- **toolbar** (string) - the id of the used pdf toolbar;
- **url** (string) - the url of the pdf file to browse in the viewer.

###PDF viewer API

####renderPage()

renders the specified page in the viewer

parameters:

- page - (number) the number of the page

~~~js
$$("pdfviewer").renderPage(2);
~~~

####prevPage()

renders the page previous to the viewed one

~~~js
$$("pdfviewer").prevPage();
~~~

####nextPage()

renders the page next to the viewed one

~~~js
$$("pdfviewer").nextPage();
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


####setScale()

sets a new value for scale

parameters:

- value - (string, number) a new scale value 
- update - (boolean) true to update pdf toolbar, false otherwise

The "value" parameter can be set as:

1) string value:

- 'page-actual' - the page scale is equal to 100% 
- 'page-width' - the page size is extended to the width of the view
- 'page-height' - the page size is extended to the height of the view
- 'page-fit' - the page's size is fit to the size of the view area
- 'auto' - the page's size is automatically fit to  the size of the view area

2) number value:

- integer numbers: 1 is equal to 100%
- float numbers: 0.5 is equal to 50%


~~~js
$$("pdfviewer").setScale(0.4, true);
// or
$$("pdfviewer").setScale('page-height', true);
~~~


PDF toolbar
--------------

You can add a toolbar into PDF viewer that will contain buttons for switching pages and zooming the picture.

To use a toolbar, apply the next configuration before the viewer initialization:

~~~js
{ 
	view:"pdfbar", 
    id:"toolbar" 
}
~~~

- **id** - (string) the id of the PDF toolbar.

###PDF bar API

####setScale()

sets a new value for the toolbar scale

parameters:

- scale - (string, number) a new scale value

Possible string values are:

- 'page-actual' - the page scale is equal to 100% 
- 'page-width' - the page size is extended to the width of the view
- 'page-height' - the page size is extended to the height of the view
- 'page-fit' - the page's size is fit to the size of the view area
- 'auto' - the page's size is automatically fit to  the size of the view area

Possible number values are:

- integer numbers: 1 is equal to 100%
- float numbers: 0.5 is equal to 50%


~~~js
$$("toolbar").setScale(0.5);
// or
$$("toolbar").setScale('page-height');
~~~


####setMasterScale()

applies a new scale value to the viewer

parameters:

- value - () a new scale value

~~~js
$$("toolbar").setMasterScale(value);
~~~

####zoom()

zooms the viewer in or out depending on toolbar button click ("+" or "-")

parameters:

- direction - (string) the direction of zooming - "in" or "out"

~~~js
$$("toolbar").zoom("in");
~~~

####setPage()

sets the current page in the toolbar

parameters:

- page - (number) the number of the page that should be displayed

~~~js
$$("toolbar").setPage(2);
~~~


####setValues()

sets the maximum number of pages in toolbar and the specified scale 

parameters:

- pages - (number) the maximum number of pages
- scale - (string, number) the scale value

~~~js
$$("toolbar").setValues(15,"auto-width");
//or
$$("toolbar").setValues(10,"page-actual");
~~~


