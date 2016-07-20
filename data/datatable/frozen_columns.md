Split Mode or "Frozen" Columns/Rows
================================

Split mode allows you to have DataTable separated into two parts: the "frozen" one and the "scrollable" one.<br>
You can freeze several columns or rows. The "frozen" part of the datatable will be fixed, while the scrollable part will remain movable.

Frozen Columns
--------------

In the split mode with "frozen" columns the fixed part can contain the last columns on the right/left side of the datatable or on both sides at a time.<br> 
The middle part can be scrolled horizontally.  

<img src='datatable/frozen_columns.png'/>

To 'froze' columns, you should use the [leftSplit](api/ui.datatable_leftsplit_config.md) and [rightSplit](api/ui.datatable_rightsplit_config.md)
parameters correspondingly. Set the number of columns you want to freeze as their value.

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

Frozen Rows
------------

{{pronote
The functionality is a feature of **Webix Pro** edition.
}}

In the split mode with "frozen" rows there are several rows fixed at the top part of datatable. 
All other rows that follow the fixed ones can be scrolled vertically.

<img src='datatable/frozen_rows1.png'/>

{{sample 60_pro/01_datatable/09_frozen_rows/01_init.html}}

You can read more about this feature in the [corresponding article](datatable/frozen_rows.md).

@keyword:
	frozen, split, separate, attach, fixed