Excel Viewer
=============

{{pronote
The widget is available in the **Webix Pro** edition.
}}

API Reference
--------------

- [Methods, properties and events](api/refs/ui.excelviewer.md)
- [Samples](http://docs.webix.com/samples/60_pro/10_viewers/)

Overview
-----------

ExcelViewer is an extension tool intended for viewing Excel files.

<img style="display:block; margin-left:auto;margin-right:auto;" src="desktop/excelviewer_front.png">

{{sample 60_pro/10_viewers/02_excel_viewer.html}}

The constructor of the viewer is the following:

~~~js
{ 
	view:"excelviewer", 
    toolbar:"toolbar", 
    excelHeader:true, 
    url:"binary->files/data.xlsx"
}
~~~

The configuration properties are:

- **toolbar** - (string) the id of the related excel toolbar, if used;
- **excelHeader** - (boolean) true to use the first row of the Excel table as a column header;
- **url** - (string) the url of the excel file that should be displayed.

**Binary** [proxy](desktop/server_proxy.md) is used for loading the file, which allows to get its contents as ArrayBuffer. 

The default [datatype](desktop/data_types.md) for Excel Viewer is **excel**. It is strongly recommended not to change it manually to avoid parsing inconsistency.

Excel Viewer API
-----------------


####load()

loads an excel file to the viewer

parameters:

- file - (string) the name of the file to load
- datatype - (string)	data type (should be "excel" here)

~~~js
$$("viewer").load("binary->data.xlsx", "excel");
~~~

####parse()

parses file data to the viewer

parameters:

- file -	(object) 	uploaded file object
- datatype -	(string)	data type (should be "excel" here)

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

{{sample 60_pro/10_viewers/03_excel_upload.html }}

####showSheet()

switches to the specified sheet

parameters:

- name - (string) the name of the sheet

~~~js
$$("viewer").showSheet("Data");
~~~

Excel Toolbar and its API
----------------

It's possible to show a toolbar with tabs that correspond to the Excel sheets.
In order to render such a toolbar, the dedicated **excelbar** view should be initialized.

~~~js
{ 
	view:"excelbar", 
    id:"toolbar" 
}
~~~

- **id** (string) - the id of the Excel toolbar.

###Excel toolbar API

####getInput() 

returns the toolbar object

~~~js
$$("toolbar").getInput();
~~~

returns:

- toolbar - (object) the toolbar object 


####getValue() 

returns the currently selected tab

~~~js
$$("toolbar").getValue();
~~~

returns: 

- tab - (string) the name of the selected tab


####setSheets() 

sets tabs in the toolbar (should correspond to excel sheets)

parameters:

- sheets - (array) an array of tabs

~~~js
$$("toolbar").setSheets(["Data", "Files"]);
~~~

####setValue() 

sets the selected tab within a toolbar

parameters:

- value - (string) the name of the tab to select

~~~js
$$("toolbar").setValue(value);
~~~


##Loading Data to Excel Viewer

There are three possible ways of loading data to Excel viewer:

- specifying the needed file directly in the viewer constructor by using the **url** parameter:

~~~js
{
	view:"excelviewer", 
    url:"binary->files/data.xlsx"
}
~~~

{{sample 60_pro/10_viewers/02_excel_viewer.html }}

- calling the **load** method with the file name as a parameter

~~~js
{ view:"excelviewer", id:"excel", editable:true, header:false },
...
$$("excel").load("binary->files/data.xlsx", "excel");
~~~

**Binary** [proxy](desktop/server_proxy.md) is used for loading the file, which allows getting its contents as ArrayBuffer.
The datatype is "excel".

- parsing uploaded file data with the help of **parse** method

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

{{sample 60_pro/10_viewers/03_excel_upload.html }}

##Customizing Loaded Data

You can customize the presentation of the loaded data, such as displaying headers and controlling the number of the loaded rows.

~~~js
{
	view:"excelviewer", 
	url:"binary->files/data.xlsx@Data[1-10]"
}
~~~

The string value of the *url* property *binary->files/data.xlsx@Data[1-10]"* includes the following parts:

- **binary** - the name of the proxy object
- **files/data.xlsx** - path to the Excel file
- **@** - optional, the delimiter that detaches the link from its parameters (can be omitted together with parameters)
- **Data** - optional, the name of the Excel sheet to render
- **[1-10]** - optional, the rows that should be rendered in the viewer


{{sample 60_pro/10_viewers/04_excel_proxy.html}}

@edition: pro

@spellcheck: xlsx