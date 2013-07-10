onHeaderClick
=============


@short: occurs after clicking on header
	

@params:
- id		id		id of column
- e			object	native html event
- trg		element		html element on which click was catched


@example:

grid.attachEvent("onHeaderClick", function(id){
    this.sort({ by:id });
});

@template:	api_event
@descr:


