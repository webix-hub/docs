clone
=============


@short: creates a copy of the pager
	

@params:
config       object         a configuration object, the same as for the pager constructor

@returns:
- pager    object     a new pager object

@example:

var pagerB = pagerA.clone({
				container:"paging_here_too",
				size:10,
				group:5
			});
            
@template:	api_method

@related:
	desktop/extend.md

	
@descr:

Can be used if you need to have few synced paging controls for the same component. 