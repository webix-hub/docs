refreshCursor
=============


@short: force repainting of all bound components with current cursor value
	

@example:

store.setCursor(10);
/* after some time */
store.refreshCursor();

@template:	api_method
@descr:

You need not call refreshCursor after changing cursor by setCursor or other api. 

The only case when refreshCursor has sense - you need to refresh bound component without changing cursor. 
