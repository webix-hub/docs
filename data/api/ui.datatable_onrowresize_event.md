onRowResize
=============


@short: fires when height of row was changed
	

@params:
- id	id		id of the row

@example:

$$("table").attachEvent("onRowResize", function(id){
	alert("New row height: " + this.getItem(id).$height );
));


@template:	api_event
@descr:




@seolinktop: [html5 framework](https://webix.com)
@seolink: [javascript datagrid](https://webix.com/widget/datatable/)