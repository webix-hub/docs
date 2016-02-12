Using Math Operations in SpreadSheet
==============================

SpreadSheet allows working with simple mathematical operations as well as with formulas. 
The component calculates them and displays the result in the related cells.

To start working with data as mathematical expressions, you should set the **math** parameter to *true*. By default, it's disabled.
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
    [ 3, 2, "Just type something like \"=A1+B2\" or \"=SUM(A1:A8)\"", "wss1" ]
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

Syntax
---------
The syntax of mathematical expressions is the same as that of Excel. 

1. Formula must start from the '=' sign.
2. The names of formulas and cell references must be written in capital letters. 
3. The following elements can be used within formulas:

- basic mathematical operators, which are: +, -, /, *
- numbers
- cell references
- Excel-like functions

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

Formulas
---------

SpreadSheet can work with the Excel formulas. Below you'll find the full list of formulas with detailed descriptions.
