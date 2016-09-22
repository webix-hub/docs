Manipulating Rows and Colums
==========================

Working with Columns
------------------------

###Hiding/showing Columns

You can hide and show a column on the sheet, using the api/ui.spreadsheet_hidecolumn.md method.
It takes two parameters:

- columnId - (number) the column id
- state	- (boolean)	true - to hide the column, false - to show it

~~~js
$$("ssheet").hideColumn(2, true);
~~~

###Deleting a column

You can also delete a particular column by passing its *id* to the api/ui.spreadsheet_deletecolumn.md method.

~~~js
$$("ssheet").deleteColumn(3);
~~~

Without the parameter, the method deletes the selected column.

###Getting the column config

It's possible to get the configuration object of a column by using the api/ui.spreadsheet_getcolumn.md.
You need to pass the column id as a parameter.

~~~js
var config = $$("ssheet").getColumn(5);
~~~

- api/ui.spreadsheet_hidecolumn.md
- api/ui.spreadsheet_iscolumnvisible.md