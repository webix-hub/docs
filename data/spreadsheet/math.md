Math Operations in SpreadSheet
==============================

SpreadSheet allows working with simple mathematical operators and with built-in functions as well as combining them in more complex formulas.
The component calculates them and displays the result in the related cells.

To start working with data as mathematical expressions, you should set the api/ui.spreadsheet_math_config.md parameter to *true*. By default, it's disabled.
SpreadSheet supports native Excel math.

~~~js
var math_data = {
  "styles": [
    [ "wss1", ";;right;;;;;;;;;;;;;" ],
    ...
  ],
  "sizes": [
    [ 3, 2, 37 ]
    ...
  ],
  "data": [
    [ 3, 2, "=SUM(B3:E3)", "wss1" ]
 	...
  ],
  "spans": [
    [ 3, 2, 4, 1 ]
    ...
  ]
};

webix.ready(function(){
	webix.ui({ 
    	view:"spreadsheet",
    	math: true,
    	data:math_data	
	});
});
~~~

{{sample
65_spreadsheet/01_basic/03_math.html
}}


Syntax
---------
The syntax of mathematical expressions is the same as that of Excel. 

1. Formula must start from the '=' sign.
2. The names of formulas and cell references must be written in capital letters. 
3. The following elements can be used within formulas:

- basic mathematical operators, which are: +, -, /, *
- numbers
- cell references
- [Excel-like functions](spreadsheet/math.md#builtinfunctions)

~~~js
"data": [
	[ 3, 2, "=A1+B2",""],
    [ 4, 2, "=7+8",""],
    [ 5, 2, "=7+B2",""],
    [ 6, 2, "=SUM(A3+D7)",""]
 	...
 ]
~~~

There are two variants of recording a function, depending on which you can get different results:

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

Built-in Functions
---------

SpreadSheet can work with the Excel functions. Below you'll find the full list of functions with detailed descriptions.

- **SUM** - adds values; 
 - empty cells, logical values like TRUE, or text are ignored.
- **AVERAGE** - returns the average (arithmetic mean) of the arguments;
 - if a range or a cell reference argument contains text, logical values, or empty cells, those values are ignored; 
however, cells with the value zero are included.
- **CONCATENATE** - joins values from a range of cells into a string.
- **COUNT** -  counts the number of cells that contain numbers, and counts numbers within the list of arguments;
 - empty cells, logical values, text, or error values in the array or reference are not counted.
- **COUNTA** - counts the number of cells that are not empty in a range, zero is excluded.
- **COUNTBLANK** - сounts empty cells in a specified range of cells;
 -  cells with zero values are not counted.
- **MAX** - returns the largest value in a set of values;
 - empty cells, logical values, or text in the array or reference are ignored.
If the arguments contain no numbers, MAX returns 0 (zero).
- **MIN** - returns the smallest number in a set of values.
 - empty cells, logical values, or text in the array or reference are ignored. 
If the arguments contain no numbers, MIN returns 0 (zero).
- **PRODUCT** - multiplies all the numbers given as arguments and returns the product; 
 - only numbers in the array or reference are multiplied. 
Empty cells, logical values, and text in the array or reference are ignored.
- **SUMPRODUCT** - multiplies corresponding components in the given arrays, and returns the sum of those products.
 - for valid products only numbers are multiplied. Empty cells, logical values, and text are ignored.
Treats array entries that are not numeric as if they were zeros.
- **SUMSQ** - returns the sum of the squares of the arguments;
 - empty cells, logical values, text, or error values in the array or reference are ignored.
- **VARP** - calculates variance based on the entire population;
 - empty cells, logical values, text, or error values in the array or reference are ignored.
- **STDEVP** - calculates standard deviation based on the entire population given as arguments. 
The standard deviation is a measure of how widely values are dispersed from the average value (the mean).
 - empty cells, logical values, text, or error values in the array or reference are ignored.
- **POWER** - returns the result of a number raised to a power;
 - works with real numbers.
- **QUOTIENT** -returns the integer portion of a division. Use this function when you want to discard the remainder of a division;
 - works with real numbers.
- **SQRT** - returns a positive square root.
- **ABS** - returns the absolute value of a number. The absolute value of a number is the number without its sign.
- **RAND** - returns an evenly distributed random real number greater than or equal to 0 and less than 1. A new random real number is returned every time the worksheet is calculated.
- **PI** - returns the number 3.14159265358979, the mathematical constant pi, accurate to 15 digits.
- **INT** - rounds a number down to the nearest integer.
- **ROUND** - rounds a number to a specified number of digits.
- **ROUNDDOWN** - rounds a number down to a specified number of digits.
- **ROUNDUP** - rounds a number up to a specified number of digits.
- **TRUNC** - truncates a number to an integer by removing the fractional part of the number.
- **EVEN** - returns number rounded up to the nearest even integer.
- **ODD** - returns number rounded up to the nearest odd integer.

{{sample
65_spreadsheet/01_basic/03_math.html
}}

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

@spellcheck:counts