Handling Events with SpreadSheet
======================

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

List of supported events
-------------------------

You can find the full list of the supported events in the [API Reference](api/refs/ui.spreadsheet_events.md).

{{sample
65_spreadsheet/02_api/05_events.html
}}

@spellcheck:api