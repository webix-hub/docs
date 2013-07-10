getColumnIndex
=============

@short:
returns the index of the column with the specified id

@params:
- id	id	the id of the column	

@returns:
- index	number	the index of the column

@example:
		
			
//gets the index of the 'rank' column
var ind = grid.getColumnIndex("rank");

@relatedapi:
	api/ui.datatable_columnid.md
@related:
	datatable/columns_configuration.md

@template:	api_method
@defined:	ui.datatable	
@descr:

Index represents the order of columns in the table structure.  
Zero-based numbering, i.e. the index of the first column == 0.

	