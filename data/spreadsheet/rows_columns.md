Manipulating Rows and Columns
==========================

Working with Columns
------------------------

###Hiding/showing columns

You can hide and show a column on the sheet, using the api/ui.spreadsheet_hidecolumn.md method.
It takes two parameters:

- columnId - (number) the column id
- state	- (boolean)	true - to hide the column, false - to show it

~~~js
$$("ssheet").hideColumn(2, true);
~~~

###Inserting a new column

To insert a new column to left of the specified one, use the api/ui.spreadsheet_insertcolumn.md method. 
The method takes the id of the column before which a new column will be inserted as a parameter.

~~~js
$$("ssheet").insertColumn(3);
~~~

If the column id isn't specified, a new column will be inserted before the selected one.


###Deleting a column

You can also delete a particular column by passing its *id* to the api/ui.spreadsheet_deletecolumn.md method.

~~~js
$$("ssheet").deleteColumn(3);
~~~

Without the parameter, the method deletes the selected column.

###Getting the column's config

It's possible to get the configuration object of a column by using the api/ui.spreadsheet_getcolumn.md.
You need to pass the column id as a parameter.

~~~js
var config = $$("ssheet").getColumn(5);
~~~

The method returns the column's configuration object.

###Checking the column's visibility

You can check the visibility of a column by using the api/ui.spreadsheet_iscolumnvisible.md method.
The method takes the id of a column as a parameter:

~~~js
var isVisible = $$("ssheet").isColumnVisible(2);
~~~

The method returns *true*, if the column is visible and *false* if it's hidden.



Working with Rows
-----------------

###Hiding/showing rows

You can hide and show a row in the sheet, using the api/ui.spreadsheet_hiderow.md method.
It takes two parameters:

- rowId - (number) the row id
- state	- (boolean)	true - to hide the row, false - to show it

~~~js
$$("ssheet").hideRow(2, true);
~~~

###Inserting a new row

To insert a new row above the specified one, use the api/ui.spreadsheet_insertrow.md method. 
The method takes the id of the row above which a new row will be inserted as a parameter.

~~~js
$$("ssheet").insertRow(3);
~~~

If the row id isn't specified, a new row will be inserted above the selected one.

###Deleting a row

You can also delete a particular row by passing its *id* to the api/ui.spreadsheet_deleterow.md method.

~~~js
$$("ssheet").deleteRow(3);
~~~

Without the parameter, the method deletes the selected row.

###Getting the row's data

It's possible to get the data of a row by using the api/ui.spreadsheet_getrow.md.
You need to pass the row id as a parameter.

~~~js
var data = $$("ssheet").getRow(5);
~~~

The method returns an object with the row's data.


###Checking the row's visibility

You can check the visibility of a row by using the api/ui.spreadsheet_isrowvisible.md method.
The method takes the id of a column as a parameter:

~~~js
var isVisible = $$("ssheet").isRowVisible(2);
~~~

The method returns *true*, if the row is visible and *false* if it's hidden.





@seolinktop: [ui component library](https://webix.com)
@seolink: [javascript spreadshee](https://webix.com/spreadsheet/)