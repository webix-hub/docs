Loading and Saving Data in SpreadSheet
==============================

##Specificity of Data Loading Format 

Data is loaded into SpreadSheet as an object that includes 4 parameters: styles, sizes, data and spans.

###Styles

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

###Sizes

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

###Data

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

###Spans

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


##Saving Data

On each change in a cell of SpreadSheet, a request for saving changes is sent to the server. 
If you change several cells at a time, requests are sent for each of them.

There are handlers for each operation. 

- data - when data is changed
- sizes - when sizes are changed
- spans - when cells are merged and divided back. A request for data saving contains:
 - row - the row where the changed cell is placed
 - column - the column where the changed cell is placed
 - x - the number of merged columns
 - y - the number of merged rows
    
- styles - when an existing style is changed or a new one is created. A request for saving data includes:
 - row - the row where the changed cell is placed
 - column - the column where the changed cell is placed
 - value - the string containing the styles of the CSS rule?? 
 - style - the name of the style
