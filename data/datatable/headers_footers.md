Headers and Footers
===================

Headers and footers in DataTable are enabled by the [header](api/ui.datatable_header_config.md) and 
[footer](api/ui.datatable_footer_config.md) parameters and configured by the attributes **header** and **footer** 
in the [columns](api/ui.datatable_columns_config.md) parameter.

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
You should use 'array' definition to split header into several sub-headers (each value of the array specifies a single sub-header).

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

Note, you can specify different number of sub-headers for different columns (number of sub-headers is equal to number of values in array).

{{sample 15_datatable/12_header_footer/03_multiline.html }}

Complex header containing colspans (rowspans), built-in filters
-------------------------------------------------------------
To specify colspan (rowspan) in the header or put filter into it, you should specify the header as an object or array of objects.

When the header is presented as an object, it has the following properties:

1. *text* - the text label of a column;
2. *colspan* - the number of columns a cell should span;
3. *rowspan* - the number of rows a cell should span;
4. *content* - functional header content, [built-in filters](datatable/filtering.md#filtersintheheader) or [group definition](datatable/columns_configuration.md#groupingcolumns);
5. *rotate* - if *true*, switches header to rotated state;
6. *height* - defines a custom height for a header line;
7. *css* - the name of a CSS class that will be applied to the column header.

###Colspan

<img src='datatable/header_colspan.png'/>

To create a cell that will span across 2 (or more) columns you should use the following technique:

{{snippet
Using colspans
}}

~~~js
columns:[
	{ id:"title", header:["Film title", {text:"Sub-header", colspan:3}]},
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

Header Menu
---------------------

{{pronote
The functionality is available in **Webix Pro** edition only. 
}}

<img src="datatable/headermenu.png">

Built-in header menu allows end users to control visibility of the columns by several mouse clicks. The definition is as well simple: 

~~~js
{ view:"datatable", columns:[...], headermenu:true}
~~~

{{sample 60_pro/01_datatable/02_headermenu/03_header_menu.html}}

Headermenu can be customized. For more details, go to the [Datatable Header Menu](datatable/headermenu.md) article. 

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
6. *height* - defines height for a footer line;
7. *css* - the name of a css class that will be applied to the column footer.

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

{{pronote
Note that this feature is available in **Webix Pro** edition only. 
}}

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

{{sample 60_pro/01_datatable/06_api/11_rotate_header.html}}


##Custom Height for Header and Footer

To set a custom height, present the header or footer line as an object and use the **height** property:

~~~js
columns:[
	{ 	
    	id:"title",	
    	header:{ text:"Film title", height:25 },
        footer:{ text:"80px footer", height:80}
    }
]
~~~

{{sample 15_datatable/12_header_footer/12_lineheight.html}}


##Autoheight for Header and Footer

It's also possible to enable autoheight for the header and the footer of DataTable. Thus the height of the header/footer will be adjusted to show 
its content.

For this, you need to set a header or a footer as an object and use the **autoheight** property with the *true* value:

~~~js
columns:[
	{ 	
		id:"title",
		header:{
			text:"A multiline header for a film title column..",
			autoheight:true
		},
		footer: { 
			text:"A multiline footer for a film title column..", 
			autoheight:true 
		}, 
	}
]
~~~

{{sample 15_datatable/12_header_footer/13_autoheight.html}}

This functionality is also avalable for rotated header/footer lines:

~~~js
columns:[
	{ id:"title"},
	{ id:"year",  header:{ text:"Released", autoheight:true, rotate:true }},
	{ id:"votes", header:{ text:"Votes", rotate:true}}
]
~~~

{{sample 60_pro/01_datatable/06_api/10_header_rotate_autoheight.html}}


Custom Header and Footer Content
--------------------------------------------

All content elements that can be integrated into the datatable header or footer are stored in a **webix.ui.datafilter** object and feature the same configuration pattern. 

There are two mandatory methods: **refresh()** that provides logic and **render()** that draws an element. Their parameters include: 

- **master** - component object (here: datatable);
- **column** - related column object;
- **node** - HTML element (here: header td).

You can either extend or redefine the functionality of any existing content element, or create a totally custom element

###Extending Existing Content Element

For datatable footer there exists a prebuilt **summColumn** element that counts the sum from column rows and displays them under the main part or the datatable.

If you need to show an average value instead of a sum inherit from the *summFilter* and redefine its **refresh()**: 

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

###Creating Custom Content Element

A custom content element can be created totally from scratch.
 
It must possess the following mandatory **methods** (declare them even if you don't need any specific performance from them): 

- **getValue()** - gets the current value of an element;
- **setValue()** - sets the value to an element;
- **render()** - paints an element;
- **refresh()** - defines dynamic performance of an element. 

And you may define as many methods as you need.

~~~js
webix.ui.datafilter.customFilterName = {
	getValue:function(){}, //not used methods
	setValue: function(){},
    refresh: function(master, node, column){
        //event handlers
        node.onchange = function(){...};
        node.onclick = function(){...}
    },
    render:function(master, column){
		var html = "...";
        return html;
    }
};
~~~

A content element can feature the following **properties**: 

- **trackCells** (boolean) -  indicates whether an element should be refreshed each time component data changes 
(if *true*, the *refresh()* method of a content element will be called automatically). 

{{sample 15_datatable/12_header_footer/11_custom_content.html }}


<h3 id="customheaderfilter">Adding Custom Built-in Filter into the Header</h3>

You can embed a filter into the header of the datatable as a custom content element.

To add a custom filter into the header, you need to implement the following steps:

- set a new filter into the [**datafilter object**](datatable/headers_footers.md#customheaderandfootercontent) to integrate it with the header and add an input for it
- set the **getValue()** method that will return the value of the input
- use the [**refresh()** method](datatable/headers_footers.md#customheaderandfootercontent) to provide the filtering logic in dynamics. 
Inside of the method you need to register the added filter and attach a handler that will trigger the [filterbyAll()](datatable/filtering.md#filteringlogic) method
- apply the [**render()**](datatable/headers_footers.md#customheaderandfootercontent) method to draw the newly created filter


~~~js
webix.ui.datafilter.customFilterName = {
  getInputNode:function(node){ 
    return node.firstChild ? node.firstChild.firstChild : { value:"" }; 
  },
  setValue:function(node, value){
    this.getInputNode(node).value = value.toString();
  },
  // returns filtering parameter
  getValue:function(node){ 
    return this.getInputNode(node).value;
  },
  refresh: function(master, node, columnObj){
    // declare a built-in datatable filter
    master.registerFilter(node, columnObj, this);
    // event which will trigger filtering
    node.querySelector("input").onkeyup = function(){
      master.filterByAll()
    }  
  },
  render:function(master, column){
    var html = "<input type='text' style='width:100%' id='cb1'>";
    return html;
  }
};
~~~

- specify your filter as a value of [the **content** property of the **header attribute**](datatable/filtering.md#settingandconfiguringfilter) 

~~~js
webix.ui({ 
  view:"datatable", 
  columns:[
    { 
      id:"title", 
      header:[{content:"customFilterName"}], 
      fillspace:1
    },
    { 
      id:"year", 
      header:[{content:"textFilter"}], 
      fillspace:1
    }
  ],
  data:grid_data
});
~~~

In the above example we have added two filters into the datatable header: a custom filter and a standard text filter.
Data will be refiltered each time the value in any of the filters changes.

@test: test
@keyword:
	header, footer,colspan,rowspan,filter,sub-header,multiline, counter
@index:
	datatable/headermenu.md

@seolinktop: [ui component library](https://webix.com)
@seolink: [javascript data grid](https://webix.com/widget/datatable/)