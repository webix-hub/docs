onBeforeCancel
=============

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

Returning *false* within the handler will prevent the execution of further logic and the action will not be cancelled.

@relatedapi:
- api/ui.pivot_oncancel_event.md
- api/ui.pivot_onbeforeapply_event.md



@seolinktop: [open source html5 framework](https://webix.com)
@seolink: [javascript pivot table](https://webix.com/pivot/)