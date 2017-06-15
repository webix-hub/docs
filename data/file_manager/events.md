Handling Events with File Manager
===============

Attaching Event Handler
-----------------------

The user can add any user-defined handler to any of the available events. To do this, the user can use the api/link/ui.vscroll_attachevent.md method with the following parameters:

- evName - name of the event;
- evHandler - user-defined event handler.
 
~~~js
webix.attachEvent(evName, evHandler);
~~~

Several handlers can be attached to one and the same event, and all of them will be executed.
The names of the events are case-insensitive.

Detaching Event Handler
---------------------

There is a simple way of removing an event-handler:

~~~js
webix.detachEvent(id); // unique id of the event handler
~~~

List of Supported Events
------------------------

You can find the full list of supported events in the File Manager [API Reference](api/refs/ui.filemanager_events.md).



@seolinktop: [javascript framework](https://webix.com)
@seolink: [javascript file explorer](https://webix.com/filemanager/)