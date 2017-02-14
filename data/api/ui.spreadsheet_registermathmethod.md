registerMathMethod
=============


@todo:
	check 

@short:
	adds a custom function that will be used in formulas

@params:

- name			string			the name of a new function, specified in uppercase
- handler		function		the handler function	


@example:

$$("ss1").registerMathMethod("NEW", function(value){
	// function's logic
});

@template:	api_method
@descr:

The handler function can receive a set of parameters you need for your function. For example, you can pass one value (a cell reference)
or an array of values (a range of cell values), etc.

@related:
spreadsheet/functions.md#creatingacustomfunction

@relatedsample:
65_spreadsheet/01_basic/03_math.html