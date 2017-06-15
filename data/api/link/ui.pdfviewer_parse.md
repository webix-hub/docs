@link: api/atomdataloader_parse.md

@short:
	parses the contents of uploaded file or base64 string into the viewer
    
@example:

// Base64 string

var base64data = ..decoded base64 data..;
$$("pdf").parse({data:base64data});

// Uploaded file
{	
	view:"uploader", 
    width:200, 
    height:45, 
    type:"form", 
    value:"Choose a PDF file to upload", 
    accept:"application/pdf", on:{
		onBeforeFileAdd:function(upload){
			$$("pdf").parse(upload.file);
		return false;
	}
}}

@relatedsample:
60_pro/10_viewers/05_pdf_upload.html

@seolinktop: [js frameworks](https://webix.com)
@seolink: [pdf js viewer](https://webix.com/widget/html5_pdf_viewer/)