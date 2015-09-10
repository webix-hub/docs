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

- **toolbar** (string) - the id of the applied excel toolbar;
- **excelHeader** (boolean) - defines whether the header of the excel table will be shown;
- **url** (string) - the url of the excel file that should be displayed.


###Excel viewer API

####load()

loads an excel file to the viewer

~~~js
$$("viewer").load("data.xlsx");
~~~

parameters:

- file - (string) the name of the file to load

####showSheet()

switches to the specified sheet

~~~js
$$("viewer").load("data.xlsx");
~~~

parameters:

- name - (string) the name of the sheet

Excel toolbar
----------------

It's possible to show a toolbar with tabs which correspond to the Excel sheets.
In order to apply such a toolbar, the **excelbar** view should be initialized.

~~~js
{ 
	view:"excelbar", 
    id:"toolbar" 
}
~~~

- **id** (string) - the id of the Excel toolbar.

###Excel toolbar API

####getValue() 
returns the currently selected tab

~~~js
$$("toolbar").getValue();
~~~

returns: 

- tab - (string) the name of the selected tab

####setValue() 

sets the selected tab

~~~js
$$("toolbar").setValue(value);
~~~

parameters:

- value - (string) the name of the tab to select



####getInput() 

returns the toolbar object

~~~js
$$("toolbar").getInput();
~~~

returns:

- toolbar - (object) the toolbar object 

####setSheets() 

sets tabs for excel sheets

~~~js
$$("toolbar").setSheets(["Data", "Files"]);
~~~

parameters:

- sheets - (array) an array of tabs


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

- loading via the **excel** proxy object

This variant of loading allows customizing the presentation of the loaded data, such as displaying of headers and the number of the loaded rows.

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

- excel-> - the name of the proxy object
- files/data.xlsx - link to the excel file
- @Data[1-10] - the name of an excel sheet with an array of rows that should be rendered in the viewer

To get more information about proxy objects read the article desktop/server_proxy.md.

{{sample 60_pro/10_viewers/04_excel_proxy.html}}