onValueSuggest
=============


@short: some item selected in the suggest control
	

@params:
- obj     object      data object for the related option

@example:

suggest.attachEvent("onValueSuggest", function(obj){
    alert("Suggested "+obj.id);
})

@template:	api_event
@descr:

Two main scenarious for event

- click on item in suggest list
- keyboard navigation with selection by enter key