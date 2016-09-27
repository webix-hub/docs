preventEvent
=============


@short: stops the event processing and cancels its default action (called in some event handler)
	
@params:
- ev	Event	a native HTML event

@returns:
- false		boolean		false

@example:
<a id="mylink" href='http://google.com'>Google</a>
~~~

~~~js
document.getElementById("mylink").onclick = function(e)
{
    alert("The link doesn't redirect us to the Google page anymore");
	return webix.html.preventEvent(e);
    
}

@template:	api_method
@descr:

If the specified event is cancelable, the method signifies that it should be cancelled. If the event can't be cancelled the method has no effect.


@relatedapi:
- api/html_stopevent.md
- api/html_triggerevent.md