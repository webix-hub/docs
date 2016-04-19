Layout and Resizer
=================

##API Reference

- [Methods, parameters and events](api__refs__ui.layout.html)
- [Samples](http://docs.webix.com/samples/01_layout/index.html)

##Overview 

<a href="http://webix.com/widget/layout-accordion/" title="webix component layout">Layout</a> is a concept element that doesn't contain anything in itself yet determines the way 'meaningful' components are arranged. It divides the page into 
**rows** and **columns** where all other components are placed. 

<br>

<img style="display:block; margin-left:auto;margin-right:auto;"   src="desktop/layout_01.png"/>

<br>


##Initialization
Layout consists of rows and columns separated from each other by borders (except for a borderless layout). **Rows** contain an array of 
[view](desktop/view.md) objects arranged horizontally while **cols** is an array of vertically arranged objects. 
Border setting and border types are described in the [corresponding chapter](desktop/borders.md) of the manual. 


~~~js
webix.ui({
	container:"layout_div",
    id:"mylayout",
	type:"space",
	rows:[
		{...},
		{cols:[
			{...},
			{...}
		]}
	]
})
~~~
{{sample 80_docs/layout.html }}

<br>

{{note
When setting layout, you can easily omit the **view:"layout"** line and start setting rows and cols at once:
}}

~~~js
webix.ui({
	type:"wide",
	rows:[  
    	{...}, {...} 
    ]
});
~~~

-  **Container** property defines the ID of a DIV element where you place the layout. Though it is an optional parameter, it makes sizing and positioning 
simpler. 
- Layout **ID** should be specified if you are going to work with it later. 

##Horizontal and Vertical Layout 

####Horizontal layout:

<img src="desktop/hor_layout.png"/>

{{snippet
Three-row layout
}}

~~~js
webix.ui({
	container:"layout_div", //corresponds to the ID of the div block 
	rows:[
		{ template:"row 1" }, //here you place any component you like
		{ template:"row 2" },
		{ template:"row 3" }
    ]
});
~~~

####Vertical layout:

<img src="desktop/vert_layout.png">

{{snippet
Three-column layout
}}
~~~js
webix.ui({
	container:"layout_div", //corresponds to the ID of the div block 
	cols:[
		{ template:"col 1" }, //here you place any component you like
		{ template:"col 2" },
		{ template:"col 3" }
	]
});
~~~

####Complex layout

Any row can be divided into columns and any column may contain rows. This is how simple layouts are nested into each other: 

<img src="desktop/layout-resizer.png"/>
~~~js
webix.ui({
   	container:"layout_div", //corresponds to the id of the div block 
   	rows:[
        {template:"row 1"}, //here you place any component you like
        {template:"row 2"},
        { cols:[
			{ template:"col 1" },
			{ template:"col 2" },
			{ template:"col 3" }
		]}
	]
});
~~~
{{sample 01_layout/02_resize_limit.html }}


##Absolute Layout

The *abslayout* view presents a layout with absolute positioning that allows specifying the exact location of elements inside it.
The child elements are placed into layout's cells and their sizes are set by absolute values as well as the sizes of the layout's container.

So, you need to define the containter first:

~~~html
<div id='layout_div' style='width:800px; height:600px; margin:20px;'></div>
~~~

Then create the "abslayout" view inside of the container and set the necessary elements inside of the layout. For each child view specify the 
top and left position, and define the exact width and height:

~~~js
webix.ui({
	container:"layout_div",
	view:"abslayout",
	cells:[
		{ view:"text", label:"Name", labelAlign:"right",
			top: 100, left:350, width:200, height: 40 },
		{ view:"text", label:"Email", labelAlign:"right",
			top: 100, left:550, width:200, height: 40 },
		{ view:"textarea", label:"My text box", labelPosition:"top",
			top: 140, left:100, width:650, height: 100 },
		{ view:"button", label:"My text box",
			top: 260, left:260, width:400, height: 40 }
	]
}).show();
~~~

{{sample 60_pro/13_layout/01_abslayout.html}}

##Data Layout

The "datalayout" view is intended for creating complex data structures, e.g. big lists with dynamic data subloading, multipage forms, etc.

Thus, a datalayout can contain several templates with data.

~~~js
webix.ui({
	view:"datalayout",
	type:"space",
	rows:[],
	data:[
		{ id:"a1", template:"A1", type:" header" },
		{ id:"a2", template:"A2", type:" header" },
		{ id:"a3", template:"A3", type:" header" },
		{ id:"a4", template:"A4", type:" header" }
	]
});
~~~

{{sample 60_pro/13_layout/02_listlayout.html}}

###Repeater mode

~~~js
webix.ui({
	view:"datalayout",
    type:"space",
    rows:[
       	{ name:"$value", type:"header", template:"#month# 2016" },
   		{ name:"data", view:"list", template:"#income#, #count#" }
    ],
    data:[
       	{ month:"January", data:[{ income: 122342, count:12 }, { income: 92342, count:8 }, { income: 222342, count:20 }] },
        { month:"February", data:[{ income: 2342, count:2 }] }
    ]
});
~~~

{{sample 60_pro/13_layout/03_repeater.html}}



##Resizer Lines {#resizer}

With this library you can make draggable border, or so-called, **resizer** lines between layout rows and columns. The resizer line can be moved in both directions and change the dimensions of the components 
on both sides of it.  

{{note
Resizer lines don't actually change the component's size. They only help users adjust the component's visual scheme to their needs. 
}}

It's recommended to set **minWidth** and **maxWidth** parameters for columns subject to resizing (**minHeight** and **maxHeight** for the rows).
It prevents them from collapsing as when the minimal width or height value is achieved, the resizer line cannot be moved anymore.

~~~js
webix.ui({
	container:"layout_div",
	id:"layout",
	rows:[
		{...}, //1st row, non-resizable
		{...}, //2nd row
		{view:"resizer"}, 
		{...}, //3rd row
		{view:"resizer"},
		{cols:[  //4th row
			{ // 1st column
				width:150,
				minWidth:50,
				maxWidth:250
			},
			{view:"resizer"},
			{....}, //2nd column
			{....} //3rd column
		]}
	]
})
~~~

{{sample
01_layout/01_resizer.html
}}

{{note
**Responsive layout behavior** depending on window/screen size is discussed [separately](desktop/responsive_layout.md). 
}}

##Headers

Check how to make headers for different components [here](desktop/setting_headers.md). 

~~~js
webix.ui({
	rows:[
    	{	view:"template", //optional
        	template:"Header for Column 1",
        	type:"header"
        }, 
		{...}
	]
})	
~~~



##Related Articles 

- [Sizing Components](desktop/dimensions.md)
- [Resizing](desktop/resizing.md)
- [Setting Borders to the Components](desktop/borders.md)
- [Adding Headers to Components](desktop/setting_headers.md)
- [Multiview](desktop/multiview.md)
- [Accordion](desktop/accordion.md)
- [Scrollview](desktop/scrollview.md)
- [Carousel](desktop/carousel.md)
- [Layout CSS Image Map](desktop/layout_css.md)
