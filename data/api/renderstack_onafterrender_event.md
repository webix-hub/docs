onAfterRender
=============


@short:
	occurs immediately after the component has been rendered


@example: 
	
some.attachEvent("onAfterRender", function(){
    //... some code here ... 
});

@template:	api_event
@defined:	AtomRender

@relatedapi:
	api/link/ui.button_onbeforerender_event.md
@related: 
	desktop/components.md
	desktop/view.md
@descr:

The event fires each time the component is redrawn, not only after the component has been created. 

To catch the moment of creation, supply it with [webix.once()](api/once.md) helper:

~~~js
some.attachEvent("onAfterRender", webix.once(function(){ 
	console.log('called once after first rendering:'); 
});
~~~


