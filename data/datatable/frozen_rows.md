Split Mode with Frozen Rows 
=================

This type of split mode "frozes" datatable rows. It means that with this mode enabled, a datatable will be splitted into two parts:
the top fixed part and the bottom scrollable part.

The "frozen" upper part contains several top rows of the datatable. The lower part is movable and can be scrolled vertically. 

<img src="datatable/frozen_rows.png">

In order to "froze" rows, you should apply the **topSplit** parameter and set the number of rows as its value.

~~~js
webix.ui({
    view:"datatable",
    ...
    topSplit:2, // 2 rows will be frozen at the top 
});
~~~