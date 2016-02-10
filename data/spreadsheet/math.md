Using Math Operations in SpreadSheet
==============================

[link](http://192.168.3.100/webix-docs/datatable__formulas.html)

SpreadSheet allows loading data stored as mathematical expressions. The component parses these expressions, calculates them and displays the result in the related cells.

To start parsing data as mathematical expressions, you should set the math parameter to true. By default, it's disabled.
SpreadSheet supports native Excel math.

~~~js
var math_data = {
  "styles": [
    [ "wss1", ";;right;;;;;;;;;;;;;" ],
    [ "wss2", ";;center;;;;;;;;;;;;;" ],
    [ "wss3", "#000;#fff;center;'PT Sans', Tahoma;15px;;;;top;;no,#444;;;#444;;" ],
    [ "wss4", "#000;#fff;right;'PT Sans', Tahoma;15px;;;;top;;no,#444;;;;#444;" ],
    [ "wss5", "#000;#fff;center;'PT Sans', Tahoma;15px;;;;top;;no,#444;;;#444;#444;" ],
    [ "wss6", "#000;#fff;right;'PT Sans', Tahoma;15px;;;bold;top;;no,#444;;;;;" ],
    [ "wss7", "#000;#fff;right;'PT Sans', Tahoma;15px;;;bold;top;;no,#444;;;;#444;" ],
    [ "wss8", "#000;#fff;center;'PT Sans', Tahoma;15px;;;bold;top;;no,#444;;;#444;;" ],
    [ "wss9", "#000;#fff;center;'PT Sans', Tahoma;15px;;;bold;top;;no,#444;;;#444;#444;" ]
  ],
  "sizes": [
    [ 9, 0, 37 ]
  ],
  "data": [
    [ 2, 2, "You can use native Excel math", "" ],
    [ 3, 2, "Just type something like \"=A1+B2\" or \"=SUM(A1:A8)\"", "" ],
    [ 5, 2, "Value A", "wss8" ],
    [ 5, 3, "ValueB", "wss8" ],
    [ 5, 4, "Summ", "wss9" ],
    [ 6, 2, "11", "wss1" ],
    [ 6, 3, "44", "wss1" ],
    [ 6, 4, 55, "wss4" ],
    [ 7, 2, "232", "wss1" ],
    [ 7, 3, "543", "wss1" ],
    [ 7, 4, 775, "wss4" ],
    [ 8, 3, "Total:", "wss6" ],
    [ 8, 4, 830, "wss7" ]
  ],
  "spans": [
    [ 2, 2, 4, 1 ],
    [ 3, 2, 4, 1 ]
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

1. Formula must start from the '=' sign.
2. Within formulas can be used:

	- basic mathematical operators, which are: +, -, /, *, (, );
	- cell references;
    - custom functions.
