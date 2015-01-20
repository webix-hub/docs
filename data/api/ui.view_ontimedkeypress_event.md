onTimedKeyPress
======================

@short: fires after typing has been finished in the field

@params:

@example:
text.attachEvent("onTimedKeyPress", function(){
	//code
});

@relatedapi:
	api/ui.view_onkeypress_event.md
@related:
	desktop/event_handling.md#keyboardevents
    desktop/uimanager.md

@template:api_event

@descr:

Event will not occur while user typing. But will occur after some delay in typing. 

It is a best play to start filtering or some other heavy operation. 

You can change default 250ms delay, by using keyPressTimeout property

~~~js
webix.ui({
	view:"search",
	keyPressTimeout:100 //100ms delay
});
~~~
