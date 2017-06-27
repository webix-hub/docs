adjustColumn
=============


@short: adjusts a column to the width of the content
	

@params:
- id	string, number		columnID
* mode	string 	adjustment mode ("header", "data", "all");
	

@example:
datatable.adjustColumn("title");
datatable.adjustColumn("title", "header");

@relatedapi:
	api/link/ui.datatable_adjust.md
@related:
	datatable/columns_configuration.md
    datatable/sizing.md
    

@template:	api_method
	
@descr:

Adjustment modes: 

- **header** - adjusts the column to the width of its header;
- **data** (default)	- adjusts the column to the width of its content;
- **all** - combines the above mentioned modes and adjusts the column to the bigger value. 




@seolinktop: [ui component library](https://webix.com)
@seolink: [datagrid in html5](https://webix.com/widget/datatable/)