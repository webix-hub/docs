Sizing and Resizing
=================
In this chapter you will learn how to set sizes for different DataTable elements and then change them, if it's needed.

We will consider 3 elements:

1. **DataTable container**;
2. **Column**;
3. **Row**. 

and 3 possible situations (scenarios) for them:

1. [Setting the fixed size](#settingthefixedsize);
2. [Autosizing](#autosizing);
3. [Resizing](#resizing).


Setting the fixed size
-----------------------
###DataTable container
By default, DataTable adjusts to the parent container size that gives us 2 ways to set the fixed size for it:

1. To set the size of the parent '*div*' container;
2. To use the [width](api/link/ui.datatable_width_config.md) and [height](api/link/ui.datatable_height_config.md) parameters within DataTable constructor.

{{snippet 
Setting the fixed size for DataTable
}}

~~~js
//way 1
<div id="box" style="width:300px;height:400px;"></div> 

grid = new webix.ui({
	container:"box",
	view:"datatable",
	...
});
//way 2
<div id="box"/>

grid = new webix.ui({
	container:"box",
	view:"datatable",
	height:400,
	width:300,
	...
});
~~~

{{editor http://webix.com/snippet/5a921be2	Adjusting to the Parent Container }}

{{editor http://webix.com/snippet/97964bf0	Sizing through the Width and Height Parameters }}

###Column

**Fixed column width**

By default, datatable columns feature **fixed size** of **100px**. To change it, you should either:

- use **width** while configuring the column to set width to a column individually, or
- use **columnWidth** while configuring the datatable to set common width for all the columns. Like default common width, it can be overridden by individual *width* value, or
- use **minWidth** property in the column configuration to define minimal width for it. If there's more space initially or after resizing, column width will be increased, but it can never be less than *minWidth* value, or
- use **minColumnWidth** property in datatable configuration to set common minimal width for all columns. It can be overridden by individual *minWidth* value.

{{snippet
Setting different widths for columns
}} 

~~~js
grid = new webix.ui({
	view:"datatable",
	...
	columns:[
		{ id:"title", header:"Film title" ,   width:80},
		{ id:"title", header:"Release year" , minWidth:50}
	]
});
~~~

{{snippet
Altering common width for all columns
}}
~~~js
grid = new webix.ui({
	view:"datatable",
	columnWidth:200,
	columns:[
		{ id:"title", header:"Film title"},
		{ id:"title", header:"Release year"}
	]
});
~~~

**Relative Sizing**

- adjusting the width of datatable to the parent container 

If you set widths for columns and their sum is less than the width of the parent container, you can use the **fillspace** attribute to force some of columns to widen for filling the unused space.


<img src='datatable/fillspace_attribute.png'/>

{{snippet
Using attribute fillspace
}} 
~~~js
grid = new webix.ui({
	view:"datatable",
	...
	columns:[
		{ id:"title", header:"Film title", fillspace:true},
		...
	]
});
~~~

{{editor http://webix.com/snippet/0e7995d1	Adjusting Columns to the Parent Container}}

- adjusting the width of a column to other datatable columns

There can be more than one **fillspace** in the datatable; in this case width will be calculated on the base of a proportion defined by numeric values: 

~~~js
grid = new webix.ui({
	view:"datatable",
	...
	columns:[
		{ id:"id", header:"ID", fillspace:1},
		{ id:"title", header:"Film title", fillspace:4}
	]
});
~~~

In the above code the *title* column is 4 times bigger than the *id* column, which is 20 to 80 percent relation. 

**Adjusting column to its content**

If you want to adjust the width of a column to the related content size, you can use attribute **adjust**. It is defined for the needed column individually and features two modes:

- **"data"** - adjusts column width to the content of the widest item in it;
- **"header"** - adjusts column width to its header content;
- **true** - searches for the widest item among data and header(s) and adjusts column width to its content.

{{snippet
Adjusting the column width to fit the content size
}}
~~~js
grid = new webix.ui({
	view:"datatable",
	...
	columns:[
		{ id:"title", header:"Film title", adjust:"data"},
        { id:"rank", header:"Rank", adjust:"header"},
        { id:"votes", header:"Votes", adjust:true}
		...
	]
})
~~~

{{editor http://webix.com/snippet/9a9cb4ab	Adjusting Columns to the Content}}

{{note
Note that resulting column width after adjusting won't be lesser than **minWidth** for this column provided that the latter is set. 
}}

###Row
To set the fixed height for a row you should use **$height** while defining the data you will load into DataTable. If you set the height in such a way, it will save its value regardless of any other enabled size parameters (e.g. - [autoheight](api/ui.datatable_autoheight_config.md)).

{{snippet
Setting different heights for rows
}} 
~~~js
grid = new webix.ui({
	view:"datatable",
	...
	data:[
       	{ $height:20, id:1, title:"The Shawshank Redemption", year:1994},
        { $height:40, id:2, title:"The Godfather",            year:1972},
        ...
    ]
});
~~~
{{editor http://webix.com/snippet/0c9dedb3	Setting Custom Size for Rows }}

Autosizing
-------------

**Autosizing to parent container**

Datatable automatically adjusts to the size of a parent container provided that no content autosizing is not enabled. 

To make the Datatble fill the entire width, you should define **fillspace** for at least one of its columns:

~~~js
grid = new webix.ui({
	view:"datatable",
	...
	columns:[
		{ id:"title", header:"Film title", fillspace:true},
        { id:"year", header:"Year", width:100}
	]
});
~~~

In this case, *title* column will be calculated as *container width - 100*.


**Autosizing to content**
 
You can enable width, height (or both of them) autosizing to adjust DataTable to the size of its content horizontally or vertically. Autosizing is enabled by the following parameters:

- [autowidth](api/ui.datatable_autowidth_config.md);
- [autoheight](api/ui.datatable_autoheight_config.md).

{{snippet
DataTable autosizing
}} 
~~~js
grid = new webix.ui({
	view:"datatable",
	...
	autoheight:true,
	autowidth:true
});            
~~~

{{editor http://webix.com/snippet/681438ac	Height and Width Autosizing }}

Resizing
-----------

By resizing we mean 2 possible scenarios:

- resizing columns, rows by hovering, dragging mouse over some border;
- setting other sizes for DataTable elements programmatically. 

{{editor http://webix.com/snippet/1b67772a	Row Auto-Height}}

###Mouse resizing

To enable the possibility to resize columns (rows) by mouse you should use one of the following parameters (or both of them at once):

- [resizeRow](api/ui.datatable_resizerow_config.md);
- [resizeColumn](api/ui.datatable_resizecolumn_config.md).


{{snippet
Enabling the possibility to resize columns and rows by mouse
}}  
~~~js
grid = new webix.ui({
	view:"datatable",
	...
	resizeColumn:true,
	resizeRow:true
});
~~~
{{editor http://webix.com/snippet/6d9d6c7f	Column and Row Resizing }}

For these resizing options there exist relevant events [onRowResize](api/ui.datatable_onrowresize_event.md) and [onColumnResize](api/ui.datatable_oncolumnresize_event.md).

###Dynamic resizing
For dynamic resizing DataTable elements, the library offers method [resize()](api/link/ui.datatable_resize.md). 
When you change size of some element and call this method, child(parent) container of the calling element will adjust to his new size. 

{{snippet
Adjusting the parent container to the DataTable size
}}
~~~js
grid = new webix.ui({
	view:"datatable",
	...
})

grid.define("width", 700);
grid.resize();
~~~
{{editor http://webix.com/snippet/4e25248c	Dynamic Adjusting to the Parent Container }}

In some situations you may need to adjust an element to the size of the outer parent HTML container. 
In such the situation you may use method [adjust()](api/link/ui.datatable_adjust.md) instead of [resize()](api/link/ui.datatable_resize.md):

{{snippet
Adjusting DataTable to the size of the parent container
}}

~~~js
grid = new webix.ui({
	container:"box",
	view:"datatable",
	...
})

webix.toNode("box").style.width = "700px";
grid.adjust();
~~~

{{editor http://webix.com/snippet/4e25248c	Dynamic Adjusting to the Parent Container }}

The [resize()](api/link/ui.datatable_resize.md) and [adjust()](api/link/ui.datatable_adjust.md) methods can lead to one and the same effect.
For example, you have DataTable placed into a 'div' container, named as 'box'. 
The initial height of DataTable is 50 px. You want to increase it to 80 px. Possible solutions are given below: 

- using of the adjust() method:
	
<img src="datatable/adjust_method_use.png">
		
~~~js
document.getElementById('box').style.height="80px";
grid.adjust();
~~~

- using the resize() method:

<img src="datatable/resize_method_use.png">
		
~~~js
grid.define("height", 80);
grid.resize();
~~~
		
You can use events to call the mentioned above methods:

{{snippet
Adjusting DataTable to the size of a window, it&#146;s placed into
}} 

~~~js
webix.event(window, "resize", function(){ grid.adjust(); })
~~~

{{sample 15_datatable/11_sizing/03_resize_win.html }}

###Dynamic Adjusting Columns and Rows

To dynamically adjust column width of row height to the size of their content, you can you the corresponding methods: 

- [**adjustColumn(id)**](api/ui.datatable_adjustcolumn.md) - adjusts the with of a chosen column specified by its ID;
- [**adjustRowHeight(id)**](api/ui.datatable_adjustrowheight.md) = adjusts height of a chosen tow specified by its ID. The method can slow down the application. 


Scrolling
-------------

By default, scrolling (vertical and horizontal) is enabled in DataTable. It can be disabled by parameters [scrollY](api/ui.datatable_scrolly_config.md), [scrollX](api/ui.datatable_scrollx_config.md).

{{snippet
Disabling vertical scrolling
}}

~~~js
grid = new webix.ui({
	view:"datatable",
	...
	scrollY:false
});
~~~

The size of the scroll bars (vertical and horizontal at the same time) can be managed by parameter [scrollSize](api/ui_scrollsize_other.md) (by default, 18px).

{{snippet
Managing the size of the scroll bars
}}

~~~js
grid = webix.ui({
	view:"datatable",
	...
	scrollSize:20
})
~~~



You can also force DataTable to be scrolled just by whole rows, i.e. you won't be able to scroll along the full length of rows. The related parameter you should enable is [scrollAlignY](api/ui.datatable_scrollaligny_config.md):

{{snippet Scrolling DataTable by whole rows}}
~~~js
grid = new webix.ui({
	...
	scrollAlignY:true
});
~~~

{{sample 15_datatable/09_columns/03_scrolls.html }}
