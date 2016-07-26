onBeforeAutoScroll
=============

@short:
	fires before autoscrolling has started

@params:

- position		object		the current cursor position

@returns:

- mode		boolean		returning <i>false</i> will prevent autoscrolling

@example:
$$("datatable1").attachEvent("onBeforeAutoScroll", function(position){
	// some code 
});

@template:	api_event
@descr:

The *position* object contains two properties:

- x - (number) the horizontal cursor position
- y - (number) the vertical cursor position
