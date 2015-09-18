onFocus
=============


@short:
	fires when a view gets focus

@params:

- current_view			object			the view that is in focus now	
- prev_view				object			the view that has previously been in focus 


@example:

$$("datatable1").attachEvent("onFocus", function(current_view, prev_view){
    // current_view is the datatable in question
});

@template:	api_event
@descr:
@related:
	desktop/uimanager.md
@relatedapi:
	api/ui.view_onblur_event.md
