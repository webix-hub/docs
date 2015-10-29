onSubViewOpen
=============

@short: fires after a subview or subrow is opened
	

@params: 
- id	obj		ID of the cell that starts a subview

@example:

datatable.attachEvent("obSubViewOpen", function(id){
	//code
});

@related:
	datatable/subrows.md
    datatable/subviews.md
	
@relatedapi:    
	api/ui.datatable_onsubviewclose_event.md
    api/ui.datatable_onsubviewcreate_event.md
    api/ui.datatable_onsubviewrender_event.md

@template:	api_event
@descr:

ID of the cell is an object with the following properties:
 
- **row** - ID of the related row;
- **column** - ID of the related column.



