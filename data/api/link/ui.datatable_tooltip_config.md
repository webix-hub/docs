@link: api/autotooltip_tooltip_config.md
@type: boolean
@example:
webix.ui({
	view:"datatable",
	columns:[
		{ id:"rank",  tooltip:false, width:50, header:"", css:"rank" },
		{ id:"title", tooltip:"Title: #title#<br>Rating: #rating#", 
        	width:200, header:"Film title" },
		{ id:"year",	header:"Year"},
		{ id:"votes",	header:"Votes"}
	],
	tooltip:true,
	autoheight:true,
	autowidth:true,

	data:small_film_set
});	

@relatedsample:
15_datatable/09_columns/08_tooltips.html 

    
@descr:

The tooltip's content will be defined by the *tooltip* property from the column configuration.
If a column doesn't have the tooltip property, the column's content will be shown in the tooltip.



@seolinktop: [html5 ui library](https://webix.com)
@seolink: [javascript datagrid library](https://webix.com/widget/datatable/)