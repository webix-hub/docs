delimeter
=============


@short: sets the default CSV delimiter
	

@type: object

@example:

webix.csv.delimiter = {
    rows:"\n", // the rows delimiter
    cols:","   // the columns delimiter
};

@template:	api_config
@defined:	csv	
@descr:


- The default rows delimiter - '\n' (new-line character)
- The default columns delimiter - '\t' (horizontal tab )

<br>
You can change delimiters globally by setting **webix.csv.delimiter.rows** and **webix.csv.delimiter.cols** properties.

~~~js
webix.csv.delimiter.rows = "\b";
webix.csv.delimiter.cols = "\v";
~~~

