Working with Sheets
=====================

Hiding/Showing Headers and Gridlines
------------------------------------

###Hiding Headers

The headers of rows and columns of a sheet can be hidden with the help of the api/ui.spreadsheet_hideheaders.md method.

<img src="spreadsheet/hidden_headers.png">

You should pass the necessary state of headers as a parameter:

~~~js
// hide headers
$$("ssheet").hideHeaders(true);
// show headers
$$("ssheet").hideHeaders(false);
~~~

{{sample 65_spreadsheet/02_api/04_borders_and_gridlines.html}}

###Hiding Gridlines

There's also a possibility to hide the lines of the SpreadSheet grid.

<img src="spreadsheet/hidden_gridlines.png">

Use the hideGridlines() method for this purpose.
The method takes the boolean parameter *state* as a parameter:

~~~js
// hide grid lines
$$("ssheet").hideBorders(true);
// show grid lines
$$("ssheet").hideBorders(false);
~~~

{{sample 65_spreadsheet/02_api/04_borders_and_gridlines.html}}


Adding Multiple Sheets
------------------------

You can add several sheets into a SpreadSheet. You need to complete a couple of steps to achieve such a configuration:

1) enable a bottom bar

You should add a bottom bar to place additional sheets on. For this,
use the *bottombar* property with the *true* value.

2) add the desired number of sheets with their configuration

The *sheets* config is the solution you need. As its value you need to specify an array of sheets objects.
Each object has the following properties:

- name - (string) the sheet name
- content - (object) an object with the sheet's configuration/data
	- data - (array) an array with data of the sheet. 
    Each element of the *data* array is set as an array that consists of three elements:
    	- rowId
        - columnId
        - value

~~~js
webix.ui({
	view:"spreadsheet",
	data:{
		sheets: [
			{
				name: "Tab 1",
				content:{
					data:[
						[1,1,"Page 1"]
					]
				}
			},
			{
				name: "Tab 2",
				content:{
					data:[
						[1,1,"Page 2"]
					]
				}
			},
			{
				name: "Tab 3",
				content:{
					data:[
						[1,1,"Page 3"]
					]
				}
			}
		]
	},
	bottombar:true
});
~~~

Adding a new Sheet
--------------------

You can add a new sheet by using the api/ui.spreadsheet_addsheet.md method.

~~~js
$$("ssheet").addSheet();
~~~

{{sample 65_spreadsheet/01_basic/07_multisheet.html}}