ready
=====


@short: event handler called just after the page has been completely parsed.
	

@params:
- code		function		event handler code


@example:
webix.ready(function (){
	webix.ui({
		container: "box",
		view: "window",
		...
	});
	...
})


@relatedapi: api/dataloader_ready_config.md
@template:	api_method
@descr:

This method is an alternative to the **onDocumentReady** event and can be used instead of the **onload()** method.
The event handler code is called just after the page has been completely parsed, protecting you from potential errors. Placing your code in `webix.ready()` is optional but we strongly encourage using it.

Can be used multiple times.
