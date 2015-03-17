stopEvent
=============


@short: stops processing of an event beyond the current target (called in some event handler)
	

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
    return webix.html.stopEvent(e);
 
}

@template:	api_method
@descr:

@relatedapi:api/html_preventevent.md


