Excel File Import
==================

Loading data from Excel into SpreadSheet
-------------------------

You can easily import data from an Excel file into SpreadSheet. For this purpose, you can choose one of the ways below:

1) specifying the necessary file in the SpreadSheet constructor with the help of the api/link/ui.spreadsheet_url_config.md parameter: 

~~~js
webix.ui({
	view:"spreadsheet",
	url: "binary->../common/test.xlsx",
    datatype:"excel"
});
~~~

The notation *"binary->../common/test.xlsx"* allows loading compiled files from the computer and get their content.

The *"excel"* datatype allows parsing the content of a binary file and getting it in the form necessary for SpreadSheet. 

2) calling the api/link/ui.spreadsheet_load.md method:

~~~js
$$("ssheet").load("binary->../common/test.xlsx", "excel");
~~~

The parameters are:

- file - (string) the name of the file to load
- datatype - (string) data type (should be "excel" here)

3) using the api/link/ui.spreadsheet_parse.md method to load data to the component:

~~~js
{ view:"uploader", value:"Load from Excel file", on:{
	onBeforeFileAdd: function(upload){
		$$("ssheet").reset();
		$$("ssheet").parse(upload.file, "excel");
		return false;
	}
}}
~~~

Parameters of the parse method are the following:

- file - (object) uploaded file object
- datatype - (string) data type (should be "excel" here)

Customizing the imported data
--------------------------------------

You can customize the presentation of the loaded data: set the name of the sheet and control the number of the loaded rows.

~~~js
webix.ui({
	view:"spreadsheet",
	url: "binary->../common/test.xlsx@Data[0-10]",
	datatype:"excel"
});
~~~

The string value of the *url* property *binary->files/data.xlsx@Data[1-10]"* includes the following parts:

- **binary** - the name of the proxy object
- **../common/test.xlsx** - path to the Excel file
- **@** - optional, the delimiter that detaches the link from its parameters (can be omitted together with parameters)
- **Data** - optional, the name of the Excel sheet to render
- **[1-10]** - optional, the rows that should be rendered in the viewer

To render rows starting from a certain row, you can set the rows array as [8-].


{{sample
65_spreadsheet/02_api/03_excel.html
}}

@spellcheck:xlsx