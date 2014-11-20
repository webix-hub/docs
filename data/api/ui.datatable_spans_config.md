spans
=============


@short:array of span configurations for the datatable
	
@type: array
	
@example:
webix.ui({
	view:"datatable", 
	data:{
       data:grid data,
       spans:[
       		[1, "country", 1, 3],
       		[4, "country", 1, 2]
       ]
	}
});    

@related:
	desktop/data_loading.md
	datatable/rowspans_colspans.md

@relatedapi:
	api/ui.datatable_addspan.md
@relatedsample:
	60_pro/01_datatable/01_colspans/01_colspans.html
@template:	api_config
@edition:  pro
@descr:

The parameter is used within the component's **data** that is presenTed as an object with two properties: 

- **data** or **url** - component data, inline of serverside (file);
- **spans** - an array of span configurations, each of which includes:
	- **id** (number, string, object) - id of the row that starts colspan/rowspan;
	- **column** (string) - id of the column that starts colspan/rowspan;
	- **width** (number) - how many columns should the span include; 
	- **height** (number) - how many rows should the span include;
	- **value** (string) - value that the span area should display;
	- **css** (string) - css class that should be applied to the span area.
    
@edition:pro    


