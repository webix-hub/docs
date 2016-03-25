excel
=============

@short: parser for uploaded Excel files or loaded as ArrayBuffer
	
@type: string

@example:

$$('mylist').data.driver = webix.DataDriver.excel;
$$('mylist').load("binary->files/data.xlsx");
// it is the same as
$$('mylist').load("binary->files/data.xlsx", "excel");

@template:	api_config
@descr:

The object contains methods and properties for correct processing Excel file. Basically, it parses Excel file data into a plain [jsarray](api/datadriver_jsarray_other.md). 

~~~js
webix.ui({
	view:"list",
    id:"mylist",
    url:"binary->files/data.xlsx",
    datatype:"excel"
});
~~~

Excel file should be loaded with the help of **binary** [proxy](desktop/server_proxy.md) or the uploaded File contents should be parsed:

~~~js
 { view:"uploader", value:"Select Excel File", width:200,
 	on:{
 		onBeforeFileAdd:function(upload){
 			$$("excel").clearAll();
 			$$("excel").parse(upload.file, "excel");
 			return false;
 		}
 	}
 }
~~~

@related:
	desktop/excelviewer.md
    spreadsheet/import.md

@relatedsample:
	60_pro/10_viewers/02_excel_viewer.html
    60_pro/10_viewers/04_excel_proxy.html
    60_pro/10_viewers/03_excel_upload.html
    65_spreadsheet/01_basic/05_excel.html
    
