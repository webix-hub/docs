Excel Viewer
=============

Excel Viewer is an extension tool intended for viewing Excel files.

<img src="desktop/excelviewer_front.png">

{{sample 60_pro/10_viewers/02_excel_viewer.html}}

The constructor of the viewer is the following:

~~~js
{ 
	view:"excelviewer", 
    toolbar:"toolbar", 
    excelHeader:true, 
    url:"files/data.xlsx"
}
~~~

The configuration properties are:

- **toolbar** - (string) the id of the related excel toolbar, if used;
- **excelHeader** - (boolean) true to use the first row of the Excel table as a column header;
- **url** - (string) the url of the excel file that should be displayed.


Excel viewer API
-----------------


####load()

loads an excel file to the viewer

parameters:

- file - (string) the name of the file to load

~~~js
$$("viewer").load("data.xlsx");
~~~


####showSheet()

switches to the specified sheet

parameters:

- name - (string) the name of the sheet

~~~js
$$("viewer").load("data.xlsx");
~~~



Excel toolbar and its API
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



##Loading data to Excel Viewer

There are two possible ways of loading data to Excel viewer:

- directly in the viewer constructor by using the **url** parameter:

~~~js
{
	view:"excelviewer", 
    url:"files/data.xlsx"
}
~~~

- using the **load** method with the viewer's id as a parameter

~~~js
{ view:"excelviewer", id:"excel", editable:true, header:false },
...
$$("excel").load(upload.file);
~~~

{{sample 60_pro/10_viewers/03_excel_upload.html}}


##Loading via the "excel" proxy object

Excelviewer allows displaying Excel data in a datatable only. At the same time by means of using the "excel" [proxy object](desktop/server_proxy.md), 
you can load data to any Webix data component ([list](desktop/list.md), [dataview](desktop/dataview.md), [chart](desktop/chart.md), etc). 

This variant of loading allows customizing the presentation of the loaded data, such as displaying headers and controlling the number of the loaded rows.

~~~js
webix.ui({
  type:"space",
  cols:[
  	{ view:"list", url:"excel->files/data.xlsx@Data[1-10]", width:320,
    	template:"#data1#, #data2#", select:true },
    { view:"datatable", autoConfig:true, url:"excel->files/data.xlsx@Files[1-]" }
  ]
});
~~~

The string value of the *url* property *excel->files/data.xlsx@Data[1-10]"* includes the following parts:

- **excel** - the name of the proxy object
- **files/data.xlsx** - link to the excel file
- **@** - the delimiter that detaches the link from its parameters (can be omitted together with parameters)
- **Data** - the name of the Excel sheet to render
- **[1-10]** - the rows that should be rendered in the viewer

To get more information about proxy objects read the desktop/server_proxy.md article.

{{sample 60_pro/10_viewers/04_excel_proxy.html}}

@edition: pro