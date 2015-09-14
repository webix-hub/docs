onFocus
=============


@short:
	fires when a view gets focus

@params:

- current_view			object			the view that is in focus now	
- prev_view				object			the view that was in focus previously


@example:

$$("datatable1").attachEvent("onFocus", function(current_view, prev_view){
    // current_view is the datatable in question
});

@template:	api_event
@descr:

