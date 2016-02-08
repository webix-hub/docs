SpreadSheet
=============

Webix SpreadSheet is a component intended for creating tables with structures of different complexity.

Webix SpreadSheet represents a web-tool for making tables online and keeping all the data locally. Thus, all the information in your reports and accounts will be kept secure and always at hand.
The ready document can be exported into an Excel, and you can import an Excel document into SpreadSheet as well.

The component includes all the necessary functionality for handy work with data presented in the tabular form. You can edit and format the content of cells, resize cells,
apply diverse styles, fonts and borders' types, align text and merge cells in rows and columns. Mathematical functions are also included. The component can be localized according to the rules
of various languages.

<br>

<img style="display:block; margin-left:auto;margin-right:auto;" src="desktop/spreadsheet_front.png">

API Reference
---------------

- [Methods, properties and events](api__refs__ui.spreadsheet.html)
- [Samples](http://docs.webix.com/samples/01_layout/index.html)


Creating SpreadSheet on the Page
---------------------------------

###Files to include

You need to include the following files in the head section of your document:

~~~html
<script src="codebase/webix.js" type="text/javascript"></script>
<script src="codebase/spreadsheet.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="codebase/webix.css">
<link rel="stylesheet" type="text/css" href="codebase/spreadsheet.css">
~~~

###Initialization

To initialize SpreadSheet and load it with data, use the code as in:

~~~js
webix.ready(function(){
	webix.ui({
		view:"spreadsheet",
		data: base_data,
		math:true
	});
});
~~~

Loading and Saving Data
-------------------------

###Specificity of Data Loading Format 

Data is loaded into SpreadSheet as an object that includes 4 parameters: styles, sizes, data and spans.

#### Styles

The "styles" parameter contains styles descriptions presented as arrays of two elements:

- the style's name
- a string containing the styles of the CSS rule 

~~~js
"styles": [
    ["wss1",";;center;;;;;;;;;"],
    ["wss2",";#6E6EFF;center;;;;;;;;;"],
    ["wss3","#FFFFFF;#6E6EFF;center;;;;;;;;;"]
  ],
~~~

####Sizes

The "sizes" parameter is optional and includes a collection of sizes that are used for restoring sizes of elements.

Each element of the array has horizontal and vertical sizes of a cell.

Horizontal size is specified as [column_number, row_number, column_size], e.g. [0,3,30]. 

Vertical size is set as [row_number, column_number, row_size], e.g. [2,0,70].

~~~js
"sizes": [
  [0,1,125],
  [0,3,158],
  [0,4,137]
],
~~~

####Data

The "data" parameter contains data elements set as arrays of 4 elements:

- the number of the row
- the number of the column
- the cell's content
- the CSS class of the cell

~~~js
"data": [
    [1,1,"Report - July 2016","wss5"],
    [1,2,"","wss5"],
    [1,3,"","wss5"],
    [2,1,"Region","wss20"],
    [2,2,"Country","wss20"],
    [2,3,"Sales - Group A","wss12"],
    [2,4,"Sales - Group A","wss12"],
    [2,5,"Total","wss13"]  
  ]
~~~

####Spans

The "spans" parameter defines the values of spans. It's an array of arrays that are specified as [row, column, colsSpanNumber, rowsSpanNumber].

For example:

~~~js
"spans": [
	[1,1,5,1]
]
~~~

An example of the object for loading is given below:

~~~js
var base_data = {
  "styles": [
    ["wss1",";;center;;;;;;;;;"],
    ["wss2",";#6E6EFF;center;;;;;;;;;"],
    ["wss3","#FFFFFF;#6E6EFF;center;;;;;;;;;"]
    ...
  ],
  "sizes": [
    [0,1,125],
    [0,3,158],
    [0,4,137]
  ],
  "data": [
    [1,1,"Report - July 2016","wss5"],
    [1,2,"","wss5"],
    [1,3,"","wss5"],
    [2,1,"Region","wss20"],
    [2,2,"Country","wss20"],
    [2,3,"Sales - Group A","wss12"],
    [2,4,"Sales - Group A","wss12"],
    [2,5,"Total","wss13"]
    ...
  ],
  "spans": [
    [1,1,5,1]
  ]
};
~~~


###Saving Data

On each change in a cell of SpreadSheet, a request for saving changes is sent to the server. 
If you change several cells at a time, requests are sent for each of them.

There are handlers for each operation. 

- data - when data is changed
- sizes - when sizes are changed
- spans - when cells are merged and divided back

A request for data saving contains:<br>
  	- row<br>
    - column <br>
    - x - the number of merged columns<br>
    - y - the number of merged rows
    
- styles - when an existing style is changed or a new one is created

A request for saving data includes:<br>
	- row<br>
    - column<br>
    - value<br>
    - style - the name of the style
