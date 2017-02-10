Working with Functions
=======================

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
- **COUNTBLANK** - counts empty cells in a specified range of cells;
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

Creating a Custom Function
--------------------------