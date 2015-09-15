onSubViewCreate
=============

@short:
	fires when a subview was created

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