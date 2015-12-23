@link: api/autotooltip_tooltip_config.md

@type:boolean
@example:

grid = new webix.ui({
	container:"testA",
	view:"datatable",
	columns:[
		{ id:"rank",  tooltip:false, width:50, header:"", css:"rank" },
		{ id:"title", tooltip:"Title: #title#<br>Rating: #rating#", width:200, header:"Film title" },
		{ id:"year",	header:"Year"},
		{ id:"votes",	header:"Votes"}
	],
	tooltip:true,
	autoheight:true,
	autowidth:true,

	data:small_film_set
});	

@relatedsample:
- 15_datatable/09_columns/08_tooltips.html 

    
@descr:

Content of tooltip will be defined by tooltip property from column configuration.
If column has not tooltip property - content of column will be shown in a tooltip.

