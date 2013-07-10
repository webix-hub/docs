ready
=============


@short: a handler that is called just after the page has been completely parsed
	

@params:
- code		function		the code to handle 


@example:
webix.ready(function(){ 
	webix.ui({
		container:"box",
		view:"window",
		...
	});
	...
})


@relatedapi: api/link/ui.datatable_ready_config.md
@template:	api_method
@descr:



This method is alternative to the **onDocumentReady** event and can be used instead of the **onload()** method. 
The code, you put inside ithe method, is called just after the page has been completely parsed protecting you from potential errors. The thing is optional but we strongly encourage you to use it.

Can be used multiple times. 