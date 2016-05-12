onHeaderClick
=============


@short: occurs after clicking on header
	

@params:
- id		id			id of a column
- e			object		native HTML event
- trg		element		HTML element on which click was caught

@returns:

- result		boolean			returning false will prevent further actions: headermenu opening, sorting, etc.

@example:

grid.attachEvent("onHeaderClick", function(id){
    this.sort({ by:id });
});

@template:	api_event
@descr:


