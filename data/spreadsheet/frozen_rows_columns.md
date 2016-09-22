Frozen Rows and Columns
=======================

##Freezing Columns

You can “freeze” a column with data to make it always visible on the screen independently of horizontal scrolling.  

<img src="spreadsheet/frozen_column.png">

To freeze columns, use the api/ui.spreadsheet_freezecolumns.md method. Columns are fixed starting from the very left one, so you should
pass the amount of columns to freeze, starting from 0 (zero) to the method:

~~~js
$$("ssheet").freezeColumns(2);
~~~

If the parameter isn't passed, the method will unfreeze the frozen columns, if there any.

##Freezing Rows

There is also a possiblity to freeze rows, to make some of them remain at the very top of the sheet.

<img src="spreadsheet/frozen_row.png">

To freeze rows, apply the api/ui.spreadsheet_freezerows.md method. As a parameter you sholud pass the number or rows that should be frozen,starting from 0.

~~~js
$$("ssheet").freezeRows(3);
~~~

Without parameters the method unfreezes the frozen rows, if there are any.