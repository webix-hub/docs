ready
=============


@short: a handler that is called just after the page has been completely parsed
	

@type:  function
@example:

webix.ui({
	view:"list",
	ready:function()
    {
		webix.message("Ready!");
        //or any custom function
	},
	url:"data.json"
});

@template:	api_config
@relatedsample:
	05_list/07_empty_list.html
@related: 
	desktop/event_handling.md
    tutorials/start_coding.md
	
@descr:

* The parameter is alternative to the **onDocumentReady** event and can be used instead of the **onload()** method.
* The function, you put inside, will be called only once. Any further data reloading won't trigger the handler. 
* The property is a good place for post-init instructions. 


