numToStr
=============


@short:
	returns formatting function

@params:
- config		object		an object of formatting configuration options


@returns:
- format      function          the formatting function

@example:
//a single datatable column
columns:[
	{ id:"votes",
	  format:webix.Number.numToStr({
			groupDelimiter:" ",
    		groupSize:3,
    		decimalDelimeter:",",
    		decimalSize:2
	})}
]

@template:	api_method
@relatedsample:
	15_datatable/20_templates/04_numbers.html
@related:
	helpers/number_formatting_methods.md
@defined:	Number	
@descr:

The config object can contain the following attributes:

- **decimalSize** - the number of decimal digits in the float number. By default, 2;
- **groupSize** - the number of digits in a group. By default, 3;
- **groupDelimiter** - a char which separates groups of digits. By default, ”,”;
- **decimalDelimeter** - a char which separates the decimal part in the float number. By default, ”.”.

~~~js
var formatFunc = webix.Number.numToStr({ decimalSize:2, decimalDelimeter:","});
 
formatFunc(10000.9990);
~~~

{{note The method doesn't format number, but returns a function which can be used for formatting }}