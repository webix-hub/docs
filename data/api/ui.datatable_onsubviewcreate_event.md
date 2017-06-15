onSubViewCreate
=============

@short:
	fires after a subview was created

@params:

- view			object			the created subview
- item			object			the item that a subgrid is created for

@example:
$$("$datatable1").attachEvent("onSubViewCreate",function(view, item){
	webix.message("A subview is created");
});

@template:	api_event
@descr:
@related:
datatable/subviews.md
@relatedsample:
	60_pro/01_datatable/07_sub/05_sub_grid_data.html
    60_pro/01_datatable/07_sub/07_sub_form.html
    
@edition:pro

@seolinktop: [html5 library](https://webix.com)
@seolink: [web datagrid](https://webix.com/widget/datatable/)