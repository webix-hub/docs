stringify
=============


@short:converts a Javascript data array in a CSV string
	

@params:
- data    array     a Javascript array of parsed values
* delimiter    object    the rows/cells delimeters used for CSV serialization

@returns:
- text     string      a CSV string

@example:

var text = webix.csv.stringify([[a,b],[c,d]]); //"a,b\n,c,d"


@template:	api_method
@defined:	csv	
@descr:

The delimiter is an object with the following properties:

~~~js
var delimeter = {
	rows: "\n",	// the rows delimiter
	cols: "\t"  // the columns delimiter
}
~~~

- The default rows delimiter - '\n' (new-line character)
- The default columns delimiter - '\t' (horizontal tab )

<br>
You can change delimiters globally by setting **webix.csv.delimiter.rows** and **webix.csv.delimiter.cols** properties.

~~~js
webix.csv.delimiter.rows = "\b";
webix.csv.delimiter.cols = "\v";
~~~

