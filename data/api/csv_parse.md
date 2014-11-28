parse
=============


@short: converts a CSV string in a Javascript data array
	

@params:
- text    string     a CSV string
* delimiter    object     the rows/columns delimiters used while CSV parsing

@returns:
- matrix     array      a Javascript array with parsed values

@example:

var data = webix.csv.parse("a,b\n,c,d"); // output[[a,b],[c,d]]


@template:	api_method
@defined:	csv	
@descr:

The delimiter is an object with the following properties:

~~~js
var delimiter = {
	rows: "\n",	// the rows delimiter
	cols: "\t"  // the columns delimiter
}
~~~

- The default rows delimiter - '\n' (new-line character)
- The default columns delimiter - '\t' (horizontal tab )

~~~js
var csv = '1-The Shawshank Redemption|2-The Godfather';
var delimiter = {rows:"|",  cols:"-" };
var data  = webix.csv.parse(csv, delimiter);
//output [["1", "The Shawshank Redemption"], ["2", "The Godfather, "1972"]]
~~~

<br>
You can change delimiters globally by setting **webix.csv.delimiter.rows** and **webix.csv.delimiter.cols** properties.

~~~js
webix.csv.delimiter.rows = "\b";
webix.csv.delimiter.cols = "\v";
~~~

