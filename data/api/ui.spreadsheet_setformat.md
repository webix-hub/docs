setFormat
=============


@todo:
	check 

@short:
	sets a custom format for a cell

@params:

- rowId			number		the row id
- columnId		number		the column id
- format		string		conditions for formatting the cell content, separated by semi-colons (the format details [link])



@example:
$$("ss1").setFormat(2,2,"[>1000]> 0.0;[>100]Check 0,000.0#;[=0]Nope");

@template:	api_method
@descr:

@relatedsample:
01_basic/13_format.html