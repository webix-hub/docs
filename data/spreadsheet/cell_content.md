Working with Cell Content
==============================

Setting a Custom Number Format
------------------------------

You can apply a custom format of displaying a numeric value to a cell or a selected range of cells.

<img src="spreadsheet/custom_format_result.png">

A custom format notation presents a string which consists of several code sections, separated by semicolons. 

<img src="spreadsheet/custom_format_popup.png">

Each code section includes a condition to compare the cell value with, 
the corresponding format and style that will be applied to it and a text that should be displayed in this cell:

- **[condition]** in square brackets - e.g. [>1000]
- **[color]** in square brackets - e.g. [blue]
- **format** as a set of zeros (e.g. 0.0;) which:
	- are separated by decimal or thousand separators 
    - have additional **0** after the separator to display insignificant zeros or **#** to ignore them  
- **text** - e.g. Text

For example:

~~~js
"[>1000][red];[>100][green]0.0;[blue] Small"
~~~

###Setting styles for custom formatting

To specify styles for custom cell format, you should define **webix_ssheet_format_[color]** class.
For example:

~~~css
<style>
	.webix_ssheet_format_green{
    	color: green !important;
    	font-weight: bold !important;
	}
</style>
~~~

###Applying Custom Format

For setting a custom number format for a cell value, use of the api/ui.spreadsheet_setformat.md method. It takes three parameters:

- rowId- (number) the row id
- columnId - (number) the column id
- format - (string)	conditions for formatting the cell content, separated by semi-colons 

~~~js
$$("ss1").setFormat(2,2,"[>1000]> 0.0;[>100]Check 0,000.0#;[=0]Nope");
~~~

{{sample 65_spreadsheet/02_api/12_format.html}}

Locking/Unlocking Cells
-----------------------

You can lock a cell or several cells to forbid editing their content.
The locked cells will be highlighted with the specified color and have a small yellow triangle in the bottom right corner.

<img src="spreadsheet/locked_cells.png">

For this purpose, you need to use the api/ui.spreadsheet_lockcell.md method and pass three parameters to it:

- rowId	- (number)	the row id
- columnId - (number) the column id
- state - (boolean)	true - to lock a cell, false - to unlock it

~~~js
$$("ssheet").lockCell(rowId, columnId, state);
~~~

In case the cell/cells to lock aren't specified, the method will lock the selected cell.

###Check the cell state

You can check, whether the cell is locked, with the help of the api/ui.spreadsheet_iscelllocked.md method.

It takes two parameters:

- rowId	- (number)	the row id
- columnId - (number) the column id

~~~js
var isLocked = $$("ssheet").isCellLocked(rowId, columnId);
~~~

The method returns *true*, if the cell is locked and *false* if it's unlocked.

{{sample 65_spreadsheet/02_api/15_lock_cell.html}}


Adding a Dropdown into a Cell
----------------------

It's possible to add an editor into a cell of the sheet. It can include either some custom options or values of a cell range.

<img src="spreadsheet/cell_editor.png">

Use the api/ui.spreadsheet_setcelleditor.md do it. The method expects three parameters:

- rowId	- (number)	the row id
- columnId - (number)	the column id
- editorObject - (object) an object with two properties 
	- type - (string) the editor type
	- options - (string/array) (the parameter is used if the editor is of the richselect type) a range of cell references or an array of editor options 

~~~js
$$("ss1").setCellEditor(1,8,{ editor:"richselect", options:["One", "Two", "Three"]});
// or
$$("ss1").setCellEditor(2,8,{ editor:"richselect", options:"B3:B7" });
~~~

{{sample 65_spreadsheet/01_basic/14_dropdowns.html}}


Filtering Cells Values 
-----------------

You can also set a filter inside of a cell. The method api/ui.spreadsheet_setcellfilter.md will help your with this task.

<img src="spreadsheet/cell_filter.png">

You need to pass the following parameters to this method:

- rowId	- (number)	the row id
- columnId - (number) the column id
- options -	(string/array) a range of cells references or an array of filter options

~~~js
// an array of options
$$("ss1").setCellFilter(1,2, ["", "Europe", "Asia", "America"]);
// a range of cells references
$$("ss1").setCellFilter(2,2, "B3:B7");
~~~

{{sample 65_spreadsheet/02_api/09_filters.html}}

Adding Sparklines into a Cell
------------------------------

You can add a small chart into a cell to display tendencies of data values changing in a range of cells.

<img src="spreadsheet/adding_sparklines.png">

To insert a sparkline inside of a cell, use the api/ui.spreadsheet_addsparkline.md method with the following parameters:

- rowId - (number) the row id
- columnId - (number) the column id
- config - (object)	the sparkline configuration that have the properties below:
	- type - (string) the type of an added sparkline
	- data - (string) the range of cells the values of which will be displayed in the sparkline
	- color - (string) the color of a sparkline either in a hex format or as a color name
    - negativeColor - (string) the color of a negative value for a Bar sparkline 
	
~~~js
$$("ssheet").addSparkline(rowId, columnId, config);
~~~

Let's insert a blue sparkline of the Line type into the cell E5. The passed parameters will be as follows:

~~~js
$$("ssheet").addSparkline(5,5,{type:"line", range:"B4:E4", color:"#6666FF"});
~~~

{{sample 65_spreadsheet/02_api/10_sparklines.html}}


Adding Named Ranges 
-----------------------

You can specify a name for a particular range of cells and then use it in formulas for calculations. 

<img src="spreadsheet/adding_named_range.png">

Thus, the formula will be easier to understand and work with.

<img src="spreadsheet/named_range_formula.png">

You can add a named range and manipulate it through the **ranges** collection:

- to add a new named range, use the *ranges.add()* method and pass two parameters to it:

	- name - (string) the name for a named range
	- range - (string) the range of cells to include into the range
~~~js
$$("ssheet").ranges.add("MYRANGE","B2:C2");
~~~

- to get the range of cells included into the named range, use the *ranges.getCode()* notation:

~~~js
$$("ssheet").ranges.getCode("MYRANGE"); // -> "B2:C2"
~~~

- to get values of all cells included into the named range, make use of the *ranges.getData()* method:

~~~js
$$("ssheet").ranges.getData("MYRANGE"); 
~~~

The method returns an array with data values of cells. For example:

~~~js

~~~

- to get all the existing named ranges, apply the *ranges.getRanges()* method:

~~~js
$$("ssheet").ranges.getRanges(); 
~~~

The method returns an array with objects, each of which presents a named range. For example:

~~~js
[{name:"K",range:"C3:D3"},{name:"M",range:"C4:E4"}]
~~~

- to remove an existing named range, use the *ranges.remove()* method:

~~~js
$$("ssheet").ranges.remove("MYRANGE");
~~~

###Using Named Ranges in Formulas


{{sample 65_spreadsheet/02_api/13_named_ranges.html}}

Adding Image in a Cell
----------------------

You can add an image into a cell to illustrate data in the spreadsheet.

<img src="spreadsheet/adding_images.png">

To insert an image into a cell, use the api/ui.spreadsheet_addimage.md method.
You need to pass three parameters to this method:

- rowId	- (number) the row id
- columnId - (number) the column id
- url - (string) the URL of an image

~~~js
$$("ssheet").addImage(2,3, "http://docs.webix.com/media/desktop/image.png");
~~~


{{sample 65_spreadsheet/02_api/11_images.html}}































