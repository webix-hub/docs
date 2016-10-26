setFormat
=============



@short:
	sets a custom format for a cell

@params:

- rowId			number		the row id
- columnId		number		the column id
- format		string		conditions for formatting the cell content, separated by semi-colons (<a href="spreadsheet/cell_content.md#settingacustomnumberformat">the format details</a>)



@example:
$$("ss1").setFormat(2,2,"[>1000]> 0.0;[>100]Check 0,000.0#;[=0]Nope");

@template:	api_method
@descr:

@relatedsample:
65_spreadsheet/02_api/12_format.html

@related:
spreadsheet/cell_content.md#settingacustomnumberformat