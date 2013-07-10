onServerOptions
=============


@short: fires when client side api loads sub-collection from server side
	

@params:
- options           mixed        hash of options collections
@example:

mytable.data.attachEvent("onSeverOptions", function(cols){
    for (var key in cols)
           webix.message("Collection: "+key);
});

@template:	api_event
@descr:


