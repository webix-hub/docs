format
=============


@short:
	returns the formatted number as a string 

@params:
- value		number		the number which needs formatting
- config	object		an object of formatting configuration options


@returns:
- num       string      the formatted number in the string format 

@example:


@template:	api_method
@defined:	Number
@related:
	helpers/number_formatting_methods.md
@descr:


The config object can contain the following attributes:

- **decimalSize** - the number of decimal digits in the float number. By default, 2;
- **groupSize** - the number of digits in a group. By default, 3;
- **groupDelimiter** - a char which separates groups of digits. By default, '&#148;,'&#148;;
- **decimalDelimiter** - a char which separates the decimal part in the float number. By default, '&#148;.'&#148;.

~~~js
var str1 = webix.Number.format( 10008.999, {decimalSize:3, groupDelimiter:" "});
~~~
