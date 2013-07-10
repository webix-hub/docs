getScrollState
=============


@short: returns the current position of scrolls
	

@returns: 
- state    object    the position of scrolls
	

@example:

var state = $$('mytable').getScrollState();
alert(state.x); //position of x-scroll
alert(state.y); //position of y-scroll


@relatedapi:
- api/ui.datatable_scrollto.md
- api/ui.datatable_showitem.md
- api/ui.datatable_showitembyindex.md

@related:
	desktop/scrollview.md
	datatable/sizing.md#scrolling
@template:	api_method
@descr:
