Loading and Saving Data in SpreadSheet
==============================

##Specificity of Data Loading Format 

Data is loaded into SpreadSheet the same as into other Webix components. Thus, you can use either the api/link/ui.proto_load.md method or the api/link/ui.proto_url_config.md parameter.

- using the load method:

~~~js
webix.ui({
	view:"spreadsheet",
	math:true
    $$("ssheet").load("data.js");
});
~~~

- using the url parameter

~~~js
webix.ui({
	view:"spreadsheet",
	url:"data.js",
	math:true
});
~~~

SpreadSheet supports JSON format and loads data as an object that includes 4 parameters: 

- data
- sizes 
- spans
- styles

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



###The Data parameter

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

###The Styles parameter

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

###The Sizes parameter

The "sizes" parameter is optional and includes a collection of sizes that are applied to specific rows and columns.

It contains descriptions of sizes, presented as arrays of 4 parameters:

- the number of the row or 0
- the number of the column or 0
- the size of an element (a row or a column)

The column's size is specified as [0, column_number, column_width], e.g. [0,3,30]. 

The row's size is set as [row_number, 0, row_height], e.g. [2,0,70].

~~~js
"sizes": [
  [1,0,60],
  [0,3,158],
  [0,4,137]
],
~~~


###The Spans parameter

The "spans" parameter defines the values of spans. It's an array of arrays that include the following parameters:

- the number of the row
- the number of the column
- the number of columns in a span
- the number of rows in a span

For example:

~~~js
"spans": [
	[1,1,5,1]
]
~~~


##Saving Data

On each change (editing or formatting) in a cell of SpreadSheet, a POST Ajax request for saving changes is sent 
to the corresponding server-side script (handler) specified in the "save" property of the SpreadSheet configuration.

~~~js
webix.ready(function(){
	webix.ui({
		view:"spreadsheet",
		url: "server/get.php",
		resizeCell: true,
		save: {
			data:"server/data.php", // if data is changed
			sizes:"server/sizes.php", // if cells' sizes are changed
			spans:"server/spans.php", // if cells are merged or splitted
			styles:"server/styles.php" // if styles are changed or a new one created
		}
	});
});
~~~


If you change several cells at a time, requests are sent for each of them.

Parameters of requests differ depending on the operation handler: 

- data.php 
 
~~~js
{
	row:3,
    column:9,
    value: 230,
    style:"wss561"
}
~~~

- sizes.php

~~~js
// for a column
{
	row:0,
    column:7,
    size:179
}
// for a row
{
	row:1,
    column:0,
    size:60
}
~~~

- spans.php

~~~js
{
	row:1,
    column:9,
    x: 2,
    y: 2
}
~~~

- styles.php

~~~js
{
	name:"wss562",
	text:"#000000;#ff0000;left;'PT Sans', Tahoma;15px;;;;top;;no,#434343;;;;;"
}
~~~

SpreadSheet is a purely client-side widget, therefore you can implement any logic at the backend. You can find several demos that implement PHP data in the SpreadSheet package.