triggerEvent
=============


@short: creates and triggers native DOM event
	

@params:

- node	HTMLElement 	HTML element for which event is created
- type 	string		event's "family"	
- name	string		event's name


@example:

var node = document.getElementById("mydiv");
webix.html.triggerEvent(node, "MouseEvents", "click");

@relatedapi:
	api/html_preventevent.md
    api/html_stopevent.md

@template:	api_method
@descr:

