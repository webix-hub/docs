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

{{sample 15_datatable/11_sizing/01_size_to_div.html }}

{{sample 15_datatable/11_sizing/04_fixed_size.html }}

###Column

By default, datatable columns feature **fixed size** of **100px**. To change it, you should either:

- use **width** while configuring the column to set width to a column individually, or
- use **columnWidth** while configuring the datatable to set common width for all the columns. Like default common width, it can be overriden by individual width value.

If you set the width in such a way, it will save its value regardless of any other enabled size parameters 
(e.g. [autowidth](api/ui.datatable_autowidth_config.md)). BTW, you can set different widths for different rows.

{{snippet
Setting different widths for columns
}} 

~~~js
grid = new webix.ui({
	view:"datatable",
	...
	columns:[
		{ id:"title", header:"Film title" ,   width:80},
		{ id:"title", header:"Release year" , width:50}
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
{{note
Note that if you set widths for columns and their sum is less than the width of the parent container, you can use the **fillspace** attribute to force some of columns to widen for filling the unused space.
}}

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
})
~~~
{{sample 15_datatable/09_columns/02_autosize_column.html }}

If you want to adjust the width of a column to fit the related content size, you can use attribute **adjust**.

{{snippet
Adjusting the column width to fit the content size
}}
~~~js
grid = new webix.ui({
	view:"datatable",
	...
	columns:[
		{ id:"title", header:"Film title", adjust:true},
		...
	]
})
~~~
{{sample 15_datatable/09_columns/01_size_by_content.html }}

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
{{sample 15_datatable/07_resize/07_custom_size.html }}

Autosizing
-------------
You can enable width, height (or both of them) autosizing to adjust DataTable to the parent container size horizontally or vertically. Autosizing is enabled by the following parameters:

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

{{sample 15_datatable/11_sizing/05_auto_size.html }}

Resizing
-----------

By resizing we mean 2 possible scenarios:

- resizing columns, rows by hovering, dragging mouse over some border;
- setting other sizes for DataTable elements programmatically. 

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
{{sample 15_datatable/07_resize/03_all_resize.html }}

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
{{sample 15_datatable/11_sizing/02_resize_node.html }}

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

{{sample 15_datatable/11_sizing/02_resize_node.html }}

The [resize()](api/link/ui.datatable_resize.md) and [adjust()](api/link/ui.datatable_adjust.md) methods can lead to one and the same effect.
For example, you have DataTable placed into a 'div' container, named as 'box'. The initial height of DataTable is 50 px. You want to increase it to 80 px. Possible solutions can look as shown in the table below: 

<table class="list" cellspacing="0" cellpadding="5" border="0">
	<caption class="caption">
		<strong>Table 1 </strong>
		Use of adjust() and resize() methods
	</caption>
	<thead>
	<tr>
		<th>
			Image
		</th>
		<th>
			Related code
		</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td><img src="datatable/adjust_method_use.png"></img></td>
		<td>
~~~js
document.getElementById('box').style.height="80px";
grid.adjust();
~~~
		</td>
	</tr>
	<tr>
		<td><img src="datatable/resize_method_use.png"></img></td>
		<td>
~~~js
grid.define("height", 80);
grid.resize();
~~~
		</td>
	</tr>
	</tbody>
</table>


You can use events to call the mentioned above methods:

{{snippet
Adjusting DataTable to the size of a window, it&#146;s placed into
}} 

~~~js
webix.event(window, "resize", function(){ grid.adjust(); })
~~~

{{sample 15_datatable/11_sizing/03_resize_win.html }}

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
grid=webix.ui({
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
