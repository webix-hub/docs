setCellFilter
=============



@short:
	creates a select filter

@params:

- rowId				number				the row id
- columnId			number				the column id
- options			string,array		a range of cells references the values of which will be filtered or an array of filter options


@example:
// an array of options
$$("ss1").setCellFilter(1,2, ["", "Europe", "Asia", "America"]);
// a range of cells references
$$("ss1").setCellFilter(2,2, "B3:B7");

@template:	api_method
@descr:

@relatedsample: 
65_spreadsheet/02_api/09_filters.html


@related:
spreadsheet/cell_content.md#filteringcellsvalues

@seolinktop: [javascript web framework](https://webix.com)
@seolink: [web based spreadsheet](https://webix.com/spreadsheet/)