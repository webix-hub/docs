onSubViewClose
=============

@short: fires after a subview or a subrow is closed
	

@params: 
- id	obj		ID of the cell that starts a subview

@example:

datatable.attachEvent("onSubViewOpen", function(id){
	// code 
});

@related:
	datatable/subrows.md
    datatable/subviews.md
	
@relatedapi:    
	api/ui.datatable_onsubviewopen_event.md
    api/ui.datatable_onsubviewcreate_event.md
    api/ui.datatable_onsubviewrender_event.md

@template:	api_event
@descr:

ID of the cell is an object with the following properties:
 
- **row** - ID of the related row;
- **column** - ID of the related column.

@edition:pro

@seolinktop: [html5 framework](https://webix.com)
@seolink: [web datagrid](https://webix.com/widget/datatable/)