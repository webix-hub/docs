onBeforeAjax
======================

@short: attaches an event handler to any Ajax request

@params:
- mode		string		type of request (GET, POST, ..)
- url		string		url in the request
- data	    obj 	    data object passed with the request
- request	object		XHRHTTP request object


@example:
//send headers
webix.event(document, "onBeforeAjax", function(mode, url, data, request){
     request.setRequestHeader("Content-type","application/json");
});


@related:
	desktop/dataprocessor.md
	helpers/ajax_operations.md
@template:	api_method
@descr: