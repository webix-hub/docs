Columns Configuration
=============================

Columns configuration is specified by parameter [columns](api/ui.datatable_columns_config.md) and all settings are managed on its level.

~~~js
grid = new webix.ui({
	view:"datatable",
    columns:[{...}, {...}],
    ...
}); 
~~~
<br>

With the help of the [columns](api/ui.datatable_columns_config.md) parameter you can:

- [specify headers/footers](#headersfooters);
- [set widths of columns](#widthsofcolumns);
- [add built-in filter](#builtinfilters);
- [set built-in sorting](#builtinsorting);
- [set the text alignment in a column](#textalignment);
- [set the format of data presentation](#dataformats);
- [specify data of columns through math formulas](#mathincolumns);
- [specify data source for the column](#externaldatasourceforthecolumn);
- [define templates for data presentation](#templates);
- [define individual CSS class for any column](#styling);
- [hide/show a column](#hidingshowingcolumns);
- [hide/show columns in groups](#settinghiddenvisiblecolumnsingroups);
- [add/delete columns dynamically](#addingdeletingcolumnsdynamically);
- [group columns](#groupingcolumns);
- [define colspans and rowspans](#settingcolspansrowspans);


Automatic Column Configuration
-------------------

Normally, you need to specify an array of column configurations for the datatable, which allows for setting various parameters needed by this or that datatable separately:

~~~js
view:"datatable", 
columns:[
	{id:"id", header:"Id", width:50, sort:"int"},
    {id:"title", header:[ "Film title",{content:"textFilter"}]
]
~~~

At the same time, you can switch to **data-based** column configuration provided by the **autoConfig** property:

~~~js
view:"datatable", 
autoConfig:true
~~~

In this case *columns* array is no longer needed. Datatable will analyze the dataset passed to it and build columns automatically. The columns will have **default values** (no sorting or filtering, width of 50px, etc.)

Headers/Footers
------------------
Enabled by parameters [header](api/ui.datatable_header_config.md), [footer](api/ui.datatable_footer_config.md) (by default, headers are enabled).

Specified by attributes **header**, **footer** and can be both *string* and *object*.

In case of *string*, you can specify just the label.

*Object* definition allows you to specify more complex column presentation. As an *object*, header/footer can contain the following properties:

- **text**  - the text label of a column;
- **colspan** - the number of columns a cell should span;
- **rowspan** - the number of rows a cell should span;
- **content** - the built-in filter of a column (textFilter or selectFilter).

{{snippet
Defining header and footer for a specific column
}}

~~~js
//simple string
grid = new webix.ui({
		view:"datatable",
		...
		footer:true,
		columns:[
        	{ id:"col1", header:"Column 1", footer:"Footer 1"},
            {...}
		]
})
//object
grid = new webix.ui({
		view:"datatable",
		...
		footer:true,
		columns:[{
			id:"col1",
			header:[{ text:"Column1", colspan:"2"}, { content:"selectFilter" }],
			footer:[{ text:"Total", rowspan:"2"}, { text:" " } ]
		},
		...]
})
~~~
{{sample 15_datatable/12_header_footer/01_basic.html }}




For more details, read the [Headers and footers](datatable/headers_footers.md) article.

Widths of Columns
---------------------

###Setting the width of columns

To set widths of columns you should use the **width** attribute.

{{snippet Setting the width of a column}}

~~~js
columns:[
	{ id:"col1",  width:200 }
]
~~~

{{sample 15_datatable/11_sizing/04_fixed_size.html }}


###Adjusting the width of columns to the parent container

To make a column or several columns fill the unused space of the parent container, use the **fillspace** attribute with the *true* value:

~~~js
columns:[
   { id:"title", header:"Film title", fillspace:true},
   ...
]
~~~

The column with the "title" value will take all the free space of the container. If there are more than one column with the enabled **fillspace** attribute, 
they will divide the free space between them.

{{sample 15_datatable/09_columns/02_autosize_column.html}}

###Distributing free space between columns

You can also set the **fillspace** attribute with numeric values for several columns. In this case their width will be calculated as a proportion defined by the values:

~~~js
columns:[
	{ id:"id", header:"ID", fillspace:1},
	{ id:"title", header:"Film title", fillspace:4}
]
~~~

In the above code the "title" column is 4 times bigger than the "id" one, which is 20 to 80 percent relation.

{{sample 15_datatable/09_columns/02_autosize_column.html}}

###Adjusting column to its content

To adjust the width of a column to the related content size, you can use the **adjust** attribute. There are two options possible:

- **data** - (the default one) adjusts column width to the content of the widest item in it;
- **header** - adjusts column width to its header content;
- **all** - combines the above mentioned modes and adjusts the column to the bigger value.

~~~js
columns:[
	{ id:"title", header:"Film title", adjust:"data"},
    { id:"rank", header:"Rank", adjust:"header"}
        ...
]
~~~

{{note
Pay attention that the resulting column's width won't be less than minWidth, in case this parameter is set for the column.
}}


{{sample 15_datatable/09_columns/01_size_by_content.html }}

For more details, read the [Sizing and resizing](datatable/sizing.md) article.

Built-in Filters
------------------
The header or footer of a column can contain filter. The following types of filters are available:

- *textFilter* - text filter. Retrieves values which contain mask defined through text field;
- *selectFilter* - select filter. Retrieves values which contain mask defined through dropdown list of possible values.
- and 6 more.. 

Filter is set by property **content** of the **header** attribute.

{{snippet
Adding filter to the header of a specific column
}}
~~~js
columns:[
	{ id:"col1", header:[{ text:"Column 1", colspan:"2"}, { content:"selectFilter" }]},
    {...}
]
~~~
{{sample 15_datatable/03_filtering/01_builtin.html }}

For more details, read the [Filtering](datatable/filtering.md) article.

Built-in Sorting
---------------------------
You are allowed to sort data in columns. The way of sorting depends on the column sorting type. 
There are 4 predefined sorting types:

- *int*
- *date*
- *string*
- *string_strict* (case-sensitive string sorting)

You can also set a [custom sorting type](datatable/sorting.md#addingcustomsortingtype).

The sorting is specified by attribute **sort**.

{{snippet 
Activating sorting for a specific column
}}

~~~js
columns:[
	{ id:"col1", sort:"string" },
    {...}
]
~~~
{{sample 15_datatable/02_sorting/01_builtin.html }}

For more details, read the [Sorting](datatable/sorting.md) article.

Text Alignment
------------------------
To set the text alignment in a column you should use attribute **css**:

{{snippet Setting the text alignment in a column}}


~~~js
<style>
.myStyle{
	text-align:right;
}
</style>

~~~

~~~js
columns:[
	{ id:"col1" css:"myStyle"},//in a separate css class
	{ id:"col2", css:{'text-align':'right'} //directly in the attribute
]
~~~

Read more about using the **css** attribute in the [Styling](datatable/styling.md) article.

Data Formats
------------------

Formatting is applied to date and number values and defined for each column separately. To set some format for a column, use the **format** attribute.

{{snippet
Setting the format for a specific column
}}

~~~js
columns:[
	//data will be formatted according to the current locale
	{ id:"col2", format:function(value){ return webix.i18n.numberFormat(value)};}
]
~~~
{{sample 15_datatable/20_templates/05_dates.html }}

For more details, read the [Number and date formatting](datatable/formatting.md) article.

Math in Columns
------------------

You can write simple math formulas to specify values in column cells. Formulas can be set for a whole column or for a single cell.

{{snippet
 Using formulas for setting values in the whole column
}}
~~~js
columns:[
	{ id:"col1", math:"[row_id,col_name] + [row_id,col_name]"}
]
~~~
{{sample 15_datatable/08_math/01_basic.html }}

For more details, read the [Using formulas](datatable/formulas.md) article.

External Data Source for the Column
------------------

The **collection** property of the column allows syncing column data with that of a [dataCollection object](desktop/nonui_objects.md) or any data management 
[component](desktop/components.md#data_widgets). 

~~~js
{	id:"order-1",
	view:"datatable",
	columns:[
		{ id:"product", header:"Product", collection:"dash-pro" },
		{ id:"quantity", header:"Quantity", 	... },
		{ id:"price", header:"Unit price",  ... }
	],
	dataFeed:"data/orderproducts.php", //main data source
};
~~~

Collection for the first column points to other **datatable** with **"dash-pro" ID**. 

~~~js
{	view:"datatable", id:"dash-pro", 
	columns:[
    	{ id:"name", header:"Product name", ..  },
        {..//other columns}
    		],
   url:"data/products.php",
   save:"connector->data/products.php" //dataprocessor    
};
~~~

With the help of this property you can also sync the datatable with various [dataCollections](desktop/nonui_objects.md). 


Templates
----------------
Through attribute **template** you can set a template of cells presentation corresponding to your needs.

{{snippet
Using templates for configuration data of a column
}}

~~~js
columns:[
	{ id:"col4", template:function(obj){return obj.col1+obj.col2*2+obj.col3*3;}}
]
~~~
{{sample 15_datatable/20_templates/01_string.html }}

For more details, read the [Data templates](datatable/templates.md) article.


Styling
-------------
Many aspects of a column can be customized to achieve the desired look-and-feel. Column style can be adjusted in a CSS class and applied through the **css** attribute.

{{snippet
Applying a CSS class to a specific column
}}

~~~js
columns:[
	{ id:"col1", css:"someStyle"}
]
~~~
For more details, read the [Styling](datatable/styling.md) article.



Hiding/Showing Columns
------------------

Initially, all the datatable columns are visible by default unless a specific **hidden** property is used in its configuration: 

~~~js
var grid = new webix.ui({
	view:"datatable",
	columns:[
    	{ id:"col1", header:"Title", hidden:true}, //this column is hidden initially
        { id:"col2", header:"Rating"} //this column is visible
   ]
})
~~~

Through the [hideColumn()](api/ui.datatable_hidecolumn.md) and [showColumn()](api/ui.datatable_showcolumn.md) methods you can manipulate visibility of columns dynamically.

{{snippet
Hiding a column
}}
~~~js
grid.hideColumn("col2");
~~~

Setting Hidden/Visible Columns in Groups
---------------

Datatable API allows for setting the initially visible group of columns (**visibleBatch**) as well as show and hide any chosen column group defined by **batch** property: 

~~~js
grida = new webix.ui({
  view:"datatable",
  visibleBatch:1,
  columns:[
  	{ id:"id",	header:"#", css:"rank",  batch:2,	width:50},
  	{ id:"title", header:"Film title", fillspace:true },
  	{ id:"year",  batch:1,	header:"Released" , width:80},
  	{ id:"category", header:"Category", batch:1},
  	{ id:"votes", batch:3, header:"Votes", 	width:100},
  	{ id:"rating", batch:3, header:"Rating", width:100},
  	{ id:"rank", header:"Rank", css:"rank",  batch:2,width:50}
  ]
});
~~~

Any column group can be shown with the api/ui.datatable_showcolumnbatch.md method that takes column **batch** value as parameter:

~~~js
//show show id, rank
grida.showColumnBatch(2);
//show votes, rating
grida.showColumnBatch(3);
~~~

{{sample 15_datatable/15_api/11_column_batches.html}}

Adding/Deleting Columns Dynamically
-----------------------------

Since datatable **columns** is an array of JSON objects, you can treat it like any JavaScript array. At any moment you can add elements (columns) to this array and delete elements from it - and
then repaint the datatable with the new configuration. 

{{snippet
Replacing current columns with new ones
}}
~~~js
grid.config.columns = [..new collection of columns..];
grid.refreshColumns();
~~~

In addition, Webix offers its own [API for working with arrays](api/refs/powerarray.md): 

- **webix.toArray()** - converts an array to "Webix" array;
- **array.insertAt()** - inserts an element to array into the specific position;
- **array.removeAt()** - removes an element from the array at the specific position.

{{snippet
Adding/Removing Separate Columns
}}
~~~js
var columns = webix.toArray(grid.config.columns);
//adding
columns.insertAt({
	id:"c"+webix.uid(),
	header:"New column"
},2);

//deleting
columns.removeAt(2);

//refreshing
grid.refreshColumns();
~~~

{{sample 15_datatable/09_columns/04_add_column.html}}

Grouping Columns
-----------------------------

{{pronote
The functionality is available in **Webix Pro** edition only. 
}}

[Column batches](#Settinghiddenvisiblecolumnsingroups) can be used to organize groups of columns that are shown/hidden by clicking on the header of an aggregating column: 

<img src="datatable/column_grouping.png"/>

For these needs a [multiple line header](datatable/headers_footers.md#complexheadercontainingcolspansrowspansbuiltinfilters) is used. 
The first line of an aggregating column is defined via an object with the following properties: 

- **content** (string) - content-forming property, here: **columnGroup**. The property is also used to define [header filters](#builtinfilters);
- **batch** (string, number) - ID of the group; 
- **groupText** (string) - title of the group (it is shown when the group is in a closed state);
- **closed** (boolean) - the initial state of the group, *false* by default;
- **colspan** (number) - the number of columns in the group, including the aggregating one. 

Also, each column that belongs to some group, should be given a group ID defined by **batch** property: 

~~~js
columns:[
	//aggregating column
	{ id:"2008_1", header:[ 
	  { content:"columnGroup", closed:true, batch:"2008", groupText:"2008", colspan:12},
	  "January"
	]},
	//other columns from the group 
	{ id:"2008_2", 	batch:"2008", header:[null, "February"] },
	{ id:"2008_3", 	batch:"2008", header:[null, "March"] },
	{ id:"2008_4", 	batch:"2008", header:[null, "April"] },
	...
]    
~~~

{{sample 60_pro/01_datatable/06_api/12_group_columns.html}}

Read more about [colspans and rowspans](datatable/headers_footers.md#complexheadercontainingcolspansrowspansbuiltinfilters) in Webix datatable header. 

Setting Colspans/Rowspans
------------------------------

{{pronote
The feature is available in **Webix Pro** edition only.
}}

Datatable allows defining colspans and rowspans by **span** configuration provided with the dataset within the **data** property of the grid.

To enable the rowspans and colspans functionality, you should set the **spans** parameter with the *true* value in the datatable configuration.

Each rowspan/colspan definition consists of the **row id**, **column id**, **width** and **height** of the span, **value** to display and **css** class to apply:

~~~js
grida = new webix.ui({
	view:"datatable",
    columns:[...],
    spans:true,
    data:{
    	data:grid_data,
        spans:[ 
        	[1, "title", 3]
        ]
    }
});
~~~

{{sample 60_pro/01_datatable/01_colspans/01_colspans.html}}

To learn more on this topic, please visit the [Datatable Rowspans and Colspans](datatable/rowspans_colspans.md) article.

