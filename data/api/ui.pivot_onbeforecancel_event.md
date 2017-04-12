onBeforeCancel
=============

@todo:
	check 

@short:
	 fires when the "Cancel" button is clicked in the filters popup

@params:
- structure			object			the structure object with chosen "filters", "rows", "columns" and "values" 

@example:
$$("pivot1").attachEvent("onBeforeCancel",function(structure){
	webix.confirm("Are you sure that you want to cancel changes?")
});

@template:	api_event
@descr:

