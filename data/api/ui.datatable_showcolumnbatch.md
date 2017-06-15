showColumnBatch
=============

@short:
    shows or hides a group of columns
	

@params:
- batch      string, number      batch name
- preserve 	boolean		hides batch; controls behaviour of other batches

@example:

var grida = new webix.ui({
	view:"datatable",
	visibleBatch:1,
	columns:[
		{ id:"id",	header:"#", css:"rank",  batch:2,	width:50},
		{ id:"title", header:"Film title", fillspace:true },
		{ id:"year",  batch:1,	header:"Released" , width:80},
		{ id:"category", header:"Category", batch:1},
		{ id:"votes", batch:3, header:"Votes", 	width:100},
		{ id:"rating", batch:3, header:"Rating", width:100},
		{ id:"rank", batch:2, header:"Rank", css:"rank", width:50}
	]
});    

//show id, rank
grida.showColumnBatch(2);

//show votes, rating
grid.showColumnBatch(3;

@relatedsample:
	-15_datatable/15_api/11_column_batches.html
@related:
	datatable/columns_configuration.md

@template:	api_method
@descr: 

Preserve mode offers three possibilities: 

- not defined - the desired group is shown, other groups are hidden. Only one group is visible at a time;
- true - the desired group is shown, other groups preserve their state (hidden or visible); 
- false - the desired group is hidden, other groups preserve their state (hidden or visible).




@seolinktop: [javascript framework](https://webix.com)
@seolink: [datagrid in html5](https://webix.com/widget/datatable/)