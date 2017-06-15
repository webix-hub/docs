Formulas in SpreadSheet
==============================

SpreadSheet allows performing operations with simple cell content (numbers, strings) and operators (arithmetic, comparison, etc.) as well as 
with [built-in functions](spreadsheet/functions.md) and [custom functions](spreadsheet/functions.md#creatingacustomfunction).
It is also possible to combine regular operands and functions in more complex formulas.
The component processes them and displays the result in the related cells.

Formula Syntax
---------

The syntax of a formula is the same as in Excel. 

1. Formula must start from the '=' sign.
2. The names of functions and cell references must be written in capital letters. 
3. The following elements can be used within formulas:

- basic mathematical operators, which are: +, -, /, *
- comparison operators: <, >, <=, >=, <>, =
- the *&* operator for [string concatenation](spreadsheet/math.md#stringconcatenation)
- numbers
- cell references
- [Excel-like functions](spreadsheet/functions.md#builtinfunctions)

~~~js
"data": [
	[ 3, 2, "=A1+B2",""],
    [ 4, 2, "=7+8",""],
    [ 5, 2, "=7+B2",""],
    [ 6, 2, "=SUM(A3+D7)",""]
 	...
 ]
~~~

- [custom functions](spreadsheet/functions.md#creatingacustomfunction)

4 . There are two variants of recording a formula, depending on which you can get different results:

- if you want to apply a formula only to two certain cells, you need to specify comma-separated references to these cells, e.g.:

~~~js
"data": [
 [ 7, 2, "=SUM(A3,D7)",""]
]
~~~

- if you want to calculate the values of cells in a range, you should define colon-separated references to the first and the last cells of the range, e.g,:

~~~js
"data": [
 [ 7, 2, "=SUM(A3:D7)",""]
]
~~~

String Concatenation
--------------------

You can contatenate string content of cells. There are three possible ways for this:

1 . use two text strings or references to the necessary cells and the **&** operator as: "=nice"&"trip" or =A1&B2

2 . use two text strings or references to the necessary cells and the **+** operator as: ="nice"+"trip" or =A1+B2. 
The "+" operator will sum numeric values and concatenate the values if summing is not possible (e.g. ="nice"+12). 

3 . apply the CONCATENATE() function, like this: =CONCATENATE("nice","trip" or A1,B2). It's also possible to connect strings from a range of cells 
to produce one continuous text: =CONCATENATE(C2:D4)



Using Named Ranges in Formulas
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
var code = $$("ssheet").ranges.getCode("MYRANGE"); // -> "B2:C2"
~~~

- to get values of all cells included into the named range, make use of the *ranges.getData()* method. The method returns an array with data values of cells:

~~~js
var data = $$("ssheet").ranges.getData("MYRANGE"); // -> ["100", "200", "300"]
~~~

- to get all the existing named ranges, apply the *ranges.getRanges()* method. The method returns an array with objects, each of which presents a named range:

~~~js
var ranges = $$("ssheet").ranges.getRanges(); // -> [{name:"K",range:"C3:D3"},...]
~~~


- to remove an existing named range, use the *ranges.remove()* method:

~~~js
$$("ssheet").ranges.remove("MYRANGE");
~~~


{{sample 65_spreadsheet/02_api/13_named_ranges.html}}


Cross-references in Multiple Sheets
-------------------

You have a possibility to link data of several sheets and use these cross references in formulas to process them together.

The rules of creating a reference to an external sheet are quite simple:

- *Sheet_Name!Cell_Name* - to refer to a cell of other sheet, e.g. =Countries!A4
- *Sheet_Name!Cells_Range* - to refer to a range of cells from other sheet, e.g. =SUM(Countries!B2:B3)
- *Sheet_Name!Named_Range* - to refer to a named range from other sheet, e.g. =SUM(Countries!DATA) 

Here are some use cases that demonstrate how you can use cross references in multi sheets:

- provide reference to a cell from a different sheet, e.g. =Data!B8*D13 (where B8 is a cell from the "Data" sheet)
- fill a chart with data from a different sheet, e.g. =SPARKLINE(Countries!DATA,"splineArea","#6666FF") (where "DATA" is a named range from the "Countries" sheet)
- fill a dropdown with a data range from a different sheet, e.g. by referecning the range in the "Add dropdown" dialog as: Countries!NAMES (where "NAMES" is a named range
from the "Countries" sheet)

{{sample 65_spreadsheet/01_basic/09_multisheet_math.html}}

Formula Editor
----------------

Spreadsheet possesses an advanced formula editor. Its main features are:

- providing the list of possible functions on entering the first letter of the function name in the input; 
- entering formula operands either by selecting a range of cells or by typing in the cell reference.


<img src="spreadsheet/formula_editor.png">

It's easy to enable the formula editor, just set the api/ui.spreadsheet_liveeditor_config.md property to true in the spreadsheet configuration:

~~~js
webix.ui({
    view: "spreadsheet",
    data: base_data,
    liveEditor: true
});
~~~

{{sample 65_spreadsheet/03_customization/03_editor_bar.html}}

@index: 

- spreadsheet/functions.md

@spellcheck:counts

@seolinktop: [javascript ui components library](https://webix.com)
@seolink: [javascript spreadsheet library](https://webix.com/spreadsheet/)