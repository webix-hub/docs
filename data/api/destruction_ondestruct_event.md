onDestruct
=============


@short: occurs when component destroyed
	

@params:

@example:
$$("mygrid").attachEvent("onDestruct", function(){
    this.some = null;
    webix.message("This is the end.");
})

@template:	api_event
@descr:

Can be used to free memory or delete the related objects