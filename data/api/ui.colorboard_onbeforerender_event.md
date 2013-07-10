onBeforeRender
=============


@short:
	occurs immediately before the component has been rendered

@params:
- data		object		a hash of data that is used for rendering

@example: 
	
some.attachEvent("onBeforeRender", function(data){
    //... some code here ... 
});

@template:	api_event
@defined:	AtomRender

@related:
	desktop/components.md
    desktop/view.md
@relatedapi:
	api/link/ui.button_onafterrender_event.md
	
@descr:

Returning *false* from the event handler will block further processing.