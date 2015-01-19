onDataRequest
=============


@short: called before exucuting auto-loading data call
	

@params:
- id		id		id of parent item
- callback	function	callback function
- url	string	url which will be called

@example: 
	
some.attachEvent("onDataRequest", function(id, callback, url){
    custom_transport(id);
    return false; //can be blocked
});

@template:	api_event
@related:
	datatree/dynamic_loading.md
@descr:


Can be used to load component by custom data transport