addSparkline
=============


@short:
adds a sparkline into a cell

@params:

- rowId			number			the row id
- columnId		number			the column id
- config		object 			the sparkline configuration


@example:
$$("my").addSparkline(5,5,{type:"line", range:"B4:E4", color:"#6666FF"});


@template:	api_method
@descr:

the config object includes the following properties:

- type	- (string)	the type of an added sparkline
- range	- (string)	a range of cells the values of which will be used for making a sparkline
- color	- (string)	the color of a sparkline either in a hex format or as a color name
- negativeColor - (string) the color of a negative value for a Bar sparkline 

@relatedsample: 65_spreadsheet/02_api/10_sparklines.html