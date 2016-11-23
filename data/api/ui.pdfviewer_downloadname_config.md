downloadName
=============

@short:
	sets the name of the downloaded file without the .pdf extension

@type: string
@example:

webix.ui({
    rows:[
        { view:"pdfbar", id:"toolbar" },
        { 
            view:"pdfviewer", 
            id:"pdf", 
            toolbar:"toolbar", 
            url:"binary->files/WebixDocs.pdf",
            downloadName:"myfile"
        }
    ]
});

@template:	api_config
@descr:

@related:
desktop/pdfviewer.md

@relatedsample:
60_pro/10_viewers/01_pdf.html
