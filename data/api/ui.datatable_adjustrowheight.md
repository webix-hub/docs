adjustRowHeight
=============


@short: adjusts row height to cell content
	

@params:
* columnId		string		column id
* silent        boolean     apply method without repainting

@example:

//adjusts height of each row to "title" cells
dtable.adjustRowHeight("title");

//adjusts height of each row to the highest cell in it
dtable.adjustRowHeight();


@template:	api_method
@descr:

You need to set [fixedRowHeight](api/ui.datatable_fixedrowheight_config.md) to *false* for your datatable, otherwise the method will not have any visible result.


Row height is adjusted to:

- the height of the cell in a column, which is defined by the *columnId* parameter;
- the height of the "biggest" cell in a row, if *columnId* is not provided.

If you want to apply auto-sizing just after data loading you can use the following code:

~~~js
webix.ui({
	view:"datatable",
	columns:[
		{ id:"rank",	width:40,	header:"", css:"rank"},
		{ id:"title",	width:380,	header:"Film title" },
		{ id:"year",	width:160,	header:"Released"   },
		{ id:"votes",	width:120,	header:"Votes"  	}
	], 
	fixedRowHeight:false,
	on:{
		"onresize":webix.once(function(){ 
			this.adjustRowHeight("title", true); 
		})
	}
});
~~~

{{note This method will slowdown a component a lot. }}

@relatedsample:
	15_datatable/07_resize/10_row_auto_height.html
@related:
	datatable/sizing.md