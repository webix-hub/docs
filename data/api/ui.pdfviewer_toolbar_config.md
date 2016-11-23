toolbar
=============

@short:
	the id of the PDF toolbar related to the viewer

@type: string
@example:
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

@template:	api_config
@descr:

@related:
desktop/pdfviewer.md

@relatedsample:
60_pro/10_viewers/01_pdf.html
