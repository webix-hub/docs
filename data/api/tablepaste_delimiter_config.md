delimiter
=============


@short: sets CSV delimiters
	

@type: object
@example:

webix.ui({
    view:"datatable",
    delimiter = {
        rows:"\n", // the rows delimiter
        cols:","   // the columns delimiter
    },
    ...
});

@template:	api_config
@descr:

- The default rows delimiter - '\n' (new-line character)
- The default columns delimiter - '\t' (horizontal tab )

<br>
You can change delimiters globally by setting **webix.csv.delimiter.rows** and **webix.csv.delimiter.cols** properties.

~~~js
webix.csv.delimiter.rows = "\b";
webix.csv.delimiter.cols = "\v";
~~~
