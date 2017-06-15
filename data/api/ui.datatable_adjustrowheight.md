adjustRowHeight
=============


@short: autodetect height of rows in datatable
	

@params:
- columnId		string		id of column
- silent        boolean     apply method without repainting

@example:

dtable.adjustRowHeight("title");


@template:	api_method
@descr:


Height detected only based on the value of one column, defined by the columnId parameter.

If you want to apply auto-sizing just after data loading you can use code like next

~~~js
grid = new webix.ui({
	container:"testA",
	view:"datatable",
	columns:[
		{ id:"rank",	width:40,	header:"", css:"rank"},
		{ id:"title",	width:380,	header:"Film title" },
		{ id:"year",	width:160,	header:"Released"   },
		{ id:"votes",	width:120,	header:"Votes"  	}
	], 
	fixedRowHeight:false,  rowLineHeight:25, rowHeight:25,	
	on:{
		"onresize":webix.once(function(){ 
			this.adjustRowHeight("title", true); 
		})
	}
});
~~~

You must have fixedRowHeight set to false, or call of adjustRowHeight will not have a visible result.

{{note This method will slowdown a component a lot. }}

@relatedsample:
	15_datatable/07_resize/10_row_auto_height.html
@related:
	datatable/sizing.md

@seolinktop: [ui library](https://webix.com)
@seolink: [download datatable](https://webix.com/widget/datatable/)