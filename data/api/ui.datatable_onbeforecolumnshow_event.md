onBeforeColumnShow
=============

@short:
	fires before a column is shown in datatable

@params:

- id		ColumnId		the column id

@example:
$$("datatable1").attachEvent("onBeforeColumnShow", function(id){
	// some code 
});

@template:	api_event
@descr:

The event is cancellable. If a handler returns *false*, the column will not be shown. 

@relatedapi:
- api/ui.datatable_onaftercolumnshow_event.md
- api/ui.datatable_showcolumn.md

@seolinktop: [javascript dashboard framework](https://webix.com)
@seolink: [web datagrid](https://webix.com/widget/datatable/)