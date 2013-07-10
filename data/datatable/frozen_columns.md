Split Mode or 'Frozen Columns'
================================
Split mode allows to have DataTable separated into two parts: 'frozen' and 'scrolled'. </br>
The frozen part is fixed. It can contain the last columns on the right(left) side or on the both sides at a time. </br>
The scrolled part is movable and can be scrolled horizontally.  


<img src='datatable/frozen_columns.png'/>

To 'froze' columns, you should use parameters [leftSplit](api/ui.datatable_leftsplit_config.md) and [rightSplit](api/ui.datatable_rightsplit_config.md).

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