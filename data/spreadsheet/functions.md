Working with Functions
=======================

Built-in Functions
---------

SpreadSheet can work with the Excel functions. Below you'll find the full list of functions with detailed descriptions.


###Math functions

- **ABS** - returns the absolute value of a number. The absolute value of a number is the number without its sign.
- **AVERAGE** - returns the average (arithmetic mean) of the arguments;
 - if a range or a cell reference argument contains text, logical values, or empty cells, those values are ignored; 
however, cells with the value zero are included.
- **CONCATENATE** - joins values from a range of cells into a string.
- **COUNT** -  counts the number of cells that contain numbers, and counts numbers within the list of arguments;
 - empty cells, logical values, text, or error values in the array or reference are not counted.
- **COUNTA** - counts the number of cells that are not empty in a range, zero is excluded.
- **COUNTBLANK** - counts empty cells in a specified range of cells;
 -  cells with zero values are not counted.
- **EVEN** - returns number rounded up to the nearest even integer.
- **INT** - rounds a number down to the nearest integer.
- **MAX** - returns the largest value in a set of values;
 - empty cells, logical values, or text in the array or reference are ignored.
If the arguments contain no numbers, MAX returns 0 (zero).
- **MIN** - returns the smallest number in a set of values.
 - empty cells, logical values, or text in the array or reference are ignored. 
If the arguments contain no numbers, MIN returns 0 (zero).
- **ODD** - returns number rounded up to the nearest odd integer.
- **PI** - returns the number 3.14159265358979, the mathematical constant pi, accurate to 15 digits.
- **POWER** - returns the result of a number raised to a power;
 - works with real numbers.
- **PRODUCT** - multiplies all the numbers given as arguments and returns the product; 
 - only numbers in the array or reference are multiplied. 
Empty cells, logical values, and text in the array or reference are ignored.
- **QUOTIENT** -returns the integer portion of a division. Use this function when you want to discard the remainder of a division;
 - works with real numbers.
- **RAND** - returns an evenly distributed random real number greater than or equal to 0 and less than 1. 
A new random real number is returned every time the worksheet is calculated.
- **ROUND** - rounds a number to a specified number of digits.
- **ROUNDDOWN** - rounds a number down to a specified number of digits.
- **ROUNDUP** - rounds a number up to a specified number of digits.
- **SQRT** - returns a positive square root.
- **STDEVP** - calculates standard deviation based on the entire population given as arguments. 
The standard deviation is a measure of how widely values are dispersed from the average value (the mean).
 - empty cells, logical values, text, or error values in the array or reference are ignored.
- **SUM** - adds values; 
 - empty cells, logical values like TRUE, or text are ignored.
- **SUMPRODUCT** - multiplies corresponding components in the given arrays, and returns the sum of those products.
 - for valid products only numbers are multiplied. Empty cells, logical values, and text are ignored.
Treats array entries that are not numeric as if they were zeros.
- **SUMSQ** - returns the sum of the squares of the arguments;
 - empty cells, logical values, text, or error values in the array or reference are ignored.
- **TRUNC** - truncates a number to an integer by removing the fractional part of the number.
- **VARP** - calculates variance based on the entire population;
 - empty cells, logical values, text, or error values in the array or reference are ignored.

<h3 id="string_functions">String functions</h3>

- **CONCATENATE** (A1,B2, C2:D4) - joins several text items into one text item.
- **LEFT** (text, count) - returns the first character or characters (leftmost) in a text string, based on the number of characters you specify.
- **LEN** (text) - returns the number of characters in a text string.
- **LOWER** (text) - converts all uppercase letters in a text string to lowercase.
- **MID** (text, start, count) - returns a specific number of characters from a text string starting at the position you specify.
- **PROPER** (text) -  capitalizes the first letter in each word of a text value.
- **RIGHT** (text, count) - returns the last character or characters (rightmost) in a text string, based on the number of characters you specify.
- **TRIM** (text) - removes spaces from text.
- **UPPER** (text) - converts text to uppercase.

###Other functions

- **IMAGE** (url) - displays an image the URL of which is set as a parameter of the function
- **SPARKLINE** (range, type, color1, color2) - draws a sparkline according to the specified parameters
- **LINK** (url, text) -  creates a shortcut or jump that opens a document stored on a network server, an intranet, or the Internet
	- link URL can be a text string or a reference to a cell that contains the link 
- **IF** (smth is true, then do smth, otherwise do smth else) - specifies a logical test to perform<br>(e.g. IF(A1 < 10, "Yes" , "No"))
 - the function supports the following operators <, >, <=, >=, <>, =


{{sample
65_spreadsheet/01_basic/03_math.html
}}

Creating a Custom Function
--------------------------

If you need a function that isn't listed above, you can create your own function and use it in the spreadsheet.

To add a new function, use the api/ui.spreadsheet_registermathmethod.md method. You should pass two parameters to it:

- the name of the function. It should be defined in uppercase
- the function handler. It takes all the necessary parameters and contains the function's logic

For example, let's create a function "MYFUNC". It should be added to the functions' list as follows:

~~~js
$$("ss1").registerMathMethod("MYFUNC", function(value){
    // function's logic
});
~~~

In the above example we have passed one parameter to the handler - "value". It will be a reference to a cell.
It is also possible to pass a range of cell references as an arrayof values or any other parameters.


{{sample 65_spreadsheet/01_basic/03_math.html}}