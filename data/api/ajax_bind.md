bind
=============


@short: binds callback function to object
	

@params:
- master     object     desired content of "this" in the callback


@returns:
- ajax       ajax     this instance of ajax object	

@example:
webix.ajax().bind(myobj).get("some.php", function(){
    //this == myobj
});

@template:	api_method
@descr:


