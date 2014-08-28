Headers and Footers
===================
Headers and footers in DataTable are enabled by the [header](api/ui.datatable_header_config.md), [footer](api/ui.datatable_footer_config.md) parameters and configured by attributes **header**, **footer** in the [columns](api/ui.datatable_columns_config.md) parameter.

Header can be presented as:

1. [A single line header](#singlelineheader);
2. [A multiline header](#multilineheader);
3. [A single line (or multiline) header containing colspans (rowspans), built-in filters](#complexheadercontainingcolspansrowspansbuiltinfilters);


Footer can be presented as: 

1. [Single-line footer](#singlelinefooter);
2. [Multiline footer](#multilinefooter);
3. [A single line (or multiline) footer containing colspans (rowspans), built-in counter](#complexfootercontainingcolspansrowspans);

Additionally, both header and footer can be [rotated](#rotatedheaderfooter) and take [custom height](#customheightforheaderandfooter).

Single line header
------------------------
To define a simple (single line) header you should specify it as a string.

<img src='datatable/simple_header.png'/>

In this case you can put the following to the header:

- *text labels*;
- *images*;
- *html inputs*;
- *links*.

{{snippet
Defining a single line header
}}

~~~js
columns:[
	//header as a button
	{ id:"col1", header:"<input type='button' value='Do something' class='dummy_button'>"}, 
    // header as an image
	{ id:"col2", header:"<img src='../common/imdb.png'>"}, 
    //header as a text label
	{ id:"col1", header:"Year"}, 
    // header as a link
	{ id:"col4", header:"<a href='http://google.com'>Link</a>"} 
]
~~~

{{sample 15_datatable/12_header_footer/04_content.html }}

Multiline header
-------------------
You should use 'array' definition to split header into several subheaders (each value of the array specifies a single subheader).

<img src='datatable/multiline_header.png'/>


{{snippet
Defining a multiline header
}}
~~~js
columns:[
	{ id:"rank",  header:["#", ""]},
	{ id:"title", header:["Film title", "Second line"]},
	{ id:"year",  header:["Year", ""]},
	{ id:"votes", header:["Votes", ""]}
]
~~~

Note, you can specify different number of subheaders for different columns (number of subheaders is equal to number of values in array).

{{sample 15_datatable/12_header_footer/03_multiline.html }}

Complex header containing colspans (rowspans), built-in filters
-------------------------------------------------------------
To specify colspan(rowspan) in the header or put filter into it, you should specify the header as an object or array of objects.

When the header is presented as an object, it has the following properties:

1. *text* - the text label of a column;
2. *colspan* - the number of columns a cell should span;
3. *rowspan* - the number of rows a cell should span;
4. *content* - the built-in filter of a column (textFilter or selectFilter);
5. *rotate* - if *true*, switches header to rotated state;
6. *height* - defines height for a header line.

###Colspan

<img src='datatable/header_colspan.png'/>

To create a cell that will span across 2 (or more) columns you should use the following technique:

{{snippet
Using colspans
}}

~~~js
columns:[
	{ id:"title", header:["Film title", {text:"Subheader", colspan:3}]},
	{ id:"year",  header:["Year", ""]},
	{ id:"votes", header:["Votes", ""]}
]
~~~

{{sample 15_datatable/12_header_footer/09_colspan.html }}

###Rowspan

<img src='datatable/header_rowspan.png'/>

To create a cell that will span across 2 (or more) rows you should use the following technique:

{{snippet
Using rowspans
}}
~~~js
columns:[
    { id:"title", header:[{ text:"Film title", rowspan:2}]},
	{ id:"year",  header:["Year", ""]},
	{ id:"votes", header:["Votes", ""]}
]
~~~

{{sample 15_datatable/12_header_footer/09_colspan.html }}

###Built-in filters

<img src='datatable/header_filters.png'/>

To put filter into the header, you should use the following technique:

{{snippet
Using filters in the header
}}
~~~js
columns:[
	{ id:"title", header:["Film title",{ content:"textFilter"}]},
	{ id:"year",  header:"Released"},
	{ id:"votes", header:"Votes"}
]
~~~

{{sample 15_datatable/12_header_footer/05_filters.html }}

More information about built-in and custom filters is in the [separate article](datatable/filtering.md).

Single line footer
--------------------

By default, headers are enabled whereas footers are disabled. <br> So, before using footers - enable them.

{{snippet
Enabling footers in DataTable
}}
~~~js
grid = new webix.ui({
	view:"datatable",
	...
	footer:true
});
~~~

Then, use all the same logic as for headers:

{{snippet Using footers}}
~~~js
columns:[
	//footer as a button
	{ id:"col1", footer:"<input type='button' value='Do something' class='dummy_button'>"}, 
    // footer as an image
	{ id:"col2", footer:"<img src='../common/imdb.png'>"},
    //footer as a text label
	{ id:"col1", footer:"Year"}, 
    // footer as a link
	{ id:"col4", footer:"<a href='http://google.com'>Link</a>"} 
]
~~~

{{sample 15_datatable/12_header_footer/01_basic.html }}

Multiline footer
-------------------

Same as with header, multiline footer is comprised of an array of texts for each footer line. 

{{snippet
Defining a multiline footer
}}
~~~js
columns:[
	{ id:"rank",  footer:["Total", "Second line"]},
	{ id:"title", footer:["", ""]},
	{ id:"year",  footer:["", ""]},
	{ id:"votes", footer:["12547", ""]}
]
~~~

Complex footer containing colspans/rowspans
-------------------

Colspans and rowspans are used under the same logic as with headers. Footer line should be presented as an object that may contain: 

1. *text* - the text label of a footer;
2. *colspan* - the number of columns a cell should span;
3. *rowspan* - the number of rows a cell should span;
4. *content* - the built-in functor of a column (summColumn);
5. *rotate* - if *true*, switches footer to rotated state;
6. *height* - defines height for a footer line.


{{snippet
Colspans in footer
}}
~~~js
columns:[
	{ id:"rank",  footer:{text:"Total", colspan:3}},
	{ id:"title", ...},
	{ id:"year", ...},
	{ id:"votes", footer:"12547"}
]
~~~


Sum counter in the footer
----------------------------
The library provides the **summColumn** counter that can be used to get the total value in the footer of a column.

To put the counter into the footer, you should use the following technique:

{{snippet
Using the sum counter in the footer
}}
~~~js
columns:[
	{ id:"rank",  header:"", footer:{text:"Total:", colspan:3}},
	{ id:"title", header:"Film title"},
    { id:"year",  header:"Released"},
	{ id:"votes", header:"Votes", footer:{content:"summColumn"}}
]
~~~

{{sample 15_datatable/12_header_footer/06_counter.html }}

Rotated header/footer
-----------------

<img src="desktop/header_rotate.png">

To define rotated state for the header or footer you should specify it as an object (or array of objects in case of multiline header/footer).

Header height will be adjusted to text size. 

~~~js
columns:[
	{ 	id:"year",
    	header:{ text:"Released", rotate:true },
        footer:{ text:"Footer", rotate:true}
    }
]    
~~~

{{sample 15_datatable/12_header_footer/13_rotate.html}}

##Custom Height for Header and Footer

To set a custom height, present footer line as an object and use the **height** property:

~~~js
columns:[
	{ 	id:"title",	
    	header:{ text:"Film title", height:25 },
        footer:{ text:"80px footer", height:80}
    }
]
~~~

{{sample 15_datatable/12_header_footer/12_lineheight.html}}

Custom Header and Footer Content
--------------------------------------------

All content elements that can be integrated to the datatable header or footer are stored in a **webix.ui.datafilter** object and feature the same configuration pattern. 

There're two mandatory methods **refresh()** that provides logic and **render()** that draws an element. Their parameters include: 

- **master** - component object (here: datatable);
- **column** - related column object;
- **node** - HTML element (here: header td).

You can either extend or redefine the functionality of any existing content element, or create a totally custom element

###Extending Existing Content Element

For datatable footer there exists a pre-built **summColumn** element that counts the sum from all rows of the column and displays them under the grid main part.

If you, for instance, want the element to display an average value instead of the sum, redefine its **refresh()** method

~~~js
webix.ui.datafilter.avgColumn = webix.extend({
  		refresh:function(master, node, value){ 
			var result = 0;
			master.mapCells(null, value.columnId, null, 1, function(value){
				value = value*1;
				if (!isNaN(value))
					result+=value;
				return value;
			});

			node.firstChild.innerHTML = Math.round(result/master.count());
		}
}, webix.ui.datafilter.summColumn);
~~~

At the same time the new content element can be created from scratch. Remember that **render()** and **refresh()** and mandatory methods:

~~~js
webix.ui.datafilter.customFilterName = {
    refresh: function(master, node, column){
        //event handlers
        node.onchange = function(){...};
        node.onclick = function(){...}
    },
    render:function(master, column){
		var html = "";
        return html;
    }
};
~~~

{{sample 15_datatable/12_header_footer/11_custom_content.html }}

@test: test
@keyword:
	header, footer,colspan,rowspan,filter,subheader,multiline, counter