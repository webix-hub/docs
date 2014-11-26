removeSpan
=============

@short: removes a rowspan/colspan from the datatable

@edition:pro

@params:
- id		string, number		row id that starts a colspan/rowspan
- column	string		column id that starts a colspan/rowspan

@example:
grid.removeSpan(1, "country");
grid.refresh();

@related:
	datatable/rowspans_colspans.md
@relatedapi:
	api/ui.datatable_addspan.md
    api/ui.datatable_spans_config.md
@template:	api_method
@descr:
@edition:  pro
