Split Mode or 'Frozen Columns'
================================

Split mode allows you to have DataTable separated into two parts: the 'frozen' one and the 'scrollable' one.<br>
The frozen part is fixed. It can contain the last columns on the right/left side or on both sides at a time.<br> 
The scrollable part is movable and can be scrolled horizontally.  


<img src='datatable/frozen_columns.png'/>

To 'froze' columns, you should use the [leftSplit](api/ui.datatable_leftsplit_config.md) and [rightSplit](api/ui.datatable_rightsplit_config.md)
parameters correspondingly. Set the number of columns you want to froze as their value.

{{snippet
Enabling the 'split' mode
}}
~~~js
dtable = new webix.ui({
	view:"datatable",
	...
    leftSplit:2, // 2 columns will be frozen on the left side
	rightSplit:2 // 2 columns will be frozen on the right side
});
~~~

{{sample 15_datatable/13_frozen_columns/01_basic.html }}

@keyword:
	frozen, split, separate, attach, fixed