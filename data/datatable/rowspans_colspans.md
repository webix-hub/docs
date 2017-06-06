Datatable Rowspans and Colspans
=============================

Datatable API allows for setting **rowspans** and **colspans** with the help of **span** configuration that is passed together with datatable data.

<img src="desktop/rowspan_colspan.png">

To enable the rowspans and colspans functionality, you should set the **spans** parameter with the *true* value in the datatable configuration.

The data you want to display in the datatable is passed in the **data** object that contains: 

- **data/url** - a data collection that should be loaded;
- **spans** - an array of rowspans and colspans for the datatable;

~~~js
webix.ui({
	view:"datatable",
    columns:[...],
    spans:true,
    data:{
    	data:[
        	{ id:1, title:"The Shawshank Redemption", country: "USA", year:1994, 
            	votes:678790, rating:9.5, rank:1},
            { id:2, title:"The Godfather", country: "USA", year:1972, votes:511495, 
            	rating:9.2, rank:2},
            { id:3, title:"The Godfather: Part II", country: "USA", year:1974, 
            	votes:319352, rating:9.0, rank:3},
            ...
        ],
        spans:[
        	//span for 3 rows
        	[1, "country", 1, 3],
            //span for 4 columns, styled
            ["sub1", "country", 4, 1, null, "highlight"],
        ]
    
    }
});
~~~

{{sample 60_pro/01_datatable/01_colspans/01_colspans.html }}

Each definition of a rowspan or colspan includes: 

- **row id** - id of the row that starts colspan/rowspan;
- **column id** - id of the column that starts colspan/rowspan;
- **width** - how many columns should the span include. Default value is 1;
- **height** - how many rows should the span include. Default value is 1;
- **value** (optional) - value that the span area should display. If the value of the start cell is required, omit this field or pass an empty value ("", null);
- **css** (optional) - CSS class that should be applied to the span area. 

Besides setting an array of rowspans and colspans directly in the datatable configuration, you can use the api/ui.datatable_addspan.md method to add spans into the datatable. 
It takes the same parameters that were described above, e.g.:

~~~js
grid.addSpan(1, "country", 1, 3);
~~~

It's also possible to remove unnecessary spans with the help of the api/ui.datatable_removespan.md method:

~~~js
grid.removeSpan(1, "country");
~~~

The method takes 2 parameters:

- id - (string/number) row id that starts a colspan/rowspan
- column - (string)	column id that starts a colspan/rowspan

Don't forget to call the api/link/ui.datatable_refresh.md method after api/ui.datatable_addspan.md or api/ui.datatable_removespan.md in order to re-render the datatable
with the applied changes:

~~~js
grid.refresh();
~~~

You can also get the span configuration array with the help of the api/ui.datatable_getspan.md method.

~~~js
var span = grid.getSpan();
~~~


CSS for Rowspan and Colspans
--------------

<img src="desktop/rowspan_css.png">

The simplest way to add styling to the rowspan or colspan is to mention its **css class** in the configuration (as shown above). 

Extra rules for span elements should be applied to properly position long texts in case of a row span: 

{{snippet
Span CSS
}}
~~~css
<!-- ensuring proper display-->
.webix_span_layer{
	background: transparent;
	position:absolute;
	left:0px;
	top:0px;
	height:0px;
	width:0px;
	overflow: visible;
}
.webix_dtable_span{
	position:absolute;
	background: #fff;
	white-space: normal;
}
<!--coloring-->
.hrow{
	background: #DFF;
}
~~~

Datatable configuration:

{{snippet
Styled Spans
}}
~~~js
var text2 = "Learn more about each film, read recent reviews and explore ratings...";

webix.ui({
	view:"datatable",
    columns:[...],
    spans:true,
    data:{
    	data:grid_data,
        spans:[
        	//span for 3 columns
        	[ "2", "rank",  6, 1, text2, "hrow"]
        ]
    
    }
});
~~~

{{sample 60_pro/01_datatable/01_colspans/02_colspans_big.html }}

@seodescr:

- See more information about Webix [mvc library](https://webix.com) and [DataTree](https://webix.com/widget/treetable/) widget there.

@metadescr: Learn how to group columns and rows of the DataTable widget and add styling to rowspan and colspan. The page contains detailed guides and samples. 
@doctitle: How DataTable rowspan and colspan features work.

@edition:pro

