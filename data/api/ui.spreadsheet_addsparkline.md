addSparkline
=============


@todo:
	check 

@short:
adds a sparkline into a cell

@params:

- rowId			number			the row id
- columnId		number			the column id
- config		object 			the sparkline configuration



@example:
$$("ssheet").addSparkline(rowId, columnId, config);


@template:	api_method
@descr:

the config object includes the following properties:

- type	-	(string)		the type of an added sparkline
- data	-	(object)		an object with data for a sparkline
- color	-	(string)		the color of a sparkline

