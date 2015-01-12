onAfterLoad
=============


@short:	fires after an HTML page was loaded to the component
	



@example:
$$('myIframe').attachEvent("onAfterLoad",function(){
           alert("Loading is finished!");
});

@template:	api_event

@related:
	desktop/data_loading.md
@relatedapi:
	api/ui.iframe_onbeforeload_event.md
	
@descr:
Note, the event will be envoked only if you load page(s) from the same domain the page with the **Iframe** view resides.


