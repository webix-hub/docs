onBeforeTabClose
===========================

@short: fires before the tab is closed

@params: 
- id		string, number	tab ID
- e		event	event 	object

@example: 

tabbar.attachEvent("onBeforeTabClose", function(id, e){
	//code
});

@template:api_event
@related:
	desktop/controls.md#tabbar
@relatedsample:
	20_multiview/11_close_button.html
@relatedapi:
	api/link/ui.tabbar_onoptionremove_event.md
@descr: 

The event fires when user clicks on the "close" button of the tab, but before it is really removed. 

The event is cancellable, which means that if an event handler return *false*, the tab won't be removed.

~~~js
tabbar.attachEvent("onBeforeTabClose", function(id, e){
	//code
    return false;
});
~~~


