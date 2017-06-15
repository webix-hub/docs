scale
=============

@short:
	current scale value

@type: string, number
@example:
//set scale
$$("pdfviewer").define("scale", "page-width");
//re-render viewer
$$("pdfviewer").renderPage($$("pdfviewer").$pageNum);


@template:	api_config
@descr:
The available types of the *string* value are:

- 'page-actual' - the page scale is equal to 100%
- 'page-width' - the page size is extended to the width of the view
- 'page-height' - the page size is extended to the height of the view
- 'page-fit' - the page's size is adjusted to the size of the view area, width or height
- 'auto' - the page's size is automatically adjusted to the size of the view area

String values will be automatically calculated into numeric values.

*Number* values can be specified as follows:

- integer number: 1 is equal to 100%
- float number: 0.5 is equal to 50%

@seolinktop: [web ui framework](https://webix.com)
@seolink: [javascript pdf viewer](https://webix.com/widget/html5_pdf_viewer/)