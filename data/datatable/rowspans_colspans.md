Datatable Rowspans and Colspans
=============================

Datatable API allows for setting **rowspans** and **colspans** with the help of **span** configuration that is passed together with datatable data.

{{note
The functionality is available only in the **Webix Pro** version.
}}

<img src="desktop/rowspan_colspan.png">

The data you want to display in the datatable is passed in the **data** object that contains: 

- **data/url** - data for loading or parsing;
- **spans** - array of rowspans and colspans for the datatable;

~~~js
webix.ui({
	view:"datatable",
    columns:[...],
    data:{
    	data:grid_data,
        spans:[
        	//span for 3 rows
        	[1, "country", 1, 3],
            //span for 4 columns, styled
            ["sub1", "country", 4, 1, null, "highlight"],
        ]
    
    }
});
~~~

{{sample 60_pro/01_datatable/01_colspans.html }}

Each definition of a rowspan or colspan includes: 

- **row id** - id of the row that starts colspan/rowspan;
- **column id** - id of the column that starts colspan/rowspan;
- **width** - how many columns should the span include. Default value is 1;
- **height** - how many rows should the span include. Default value is 1;
- **value** (optional) - value that the span area should display. If the value of the start cell is required, omit this field or pass an empty value ("", null);
- **css** (optional) - css class that should be applied to the span area. 

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
<!--colouring-->
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
    data:{
    	data:grid_data,
        spans:[
        	//span for 3 columns
        	[ "2", "rank",  6, 1, text2, "hrow"]
        ]
    
    }
});
~~~

{{sample 60_pro/01_datatable/02_colspans_big.html }}

