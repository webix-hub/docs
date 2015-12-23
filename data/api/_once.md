once
=============


@short: allows to call code only once
	

@params:
- code     function     code to execute


@example:

datatable.attachEvent("onItemClick", webix.once(function(id){
    webix.message(id); //Will be shown only for the first click;
});


@template:	api_method
@descr:


