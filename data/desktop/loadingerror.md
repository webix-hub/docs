Management of Loading Errors
===========================

Since data loading depends on multiple factors, server side frequently returns loading error messages instead of requested data. The webix UI library
allows trapping such errors and treating them in some way on the client side. 

Default Error Management
---------------------------

By default if an error occurs, there appears a **webix.message** with details being shown in console. This functionality works only in 
[_debug](desktop/debug.md) code version while release version doesn't show any error messages. 

To switch off the default error handler, use the following code:

~~~js
webix.detachEvent(webix.debug_load_event);
~~~

Global Error Events
-----------------------------

You can create your own global **loading error hander** that will catch server-side error responses regardless of the component:

**onAjaxError**(request_obj) - fires when any Ajax request results in an error;
**onLoadError**(text, xml, xhttp, obj) - fires when an error has happened during loading the data into any component on the page.

Global events are attached to Webix object: 
~~~js

webix.attachEvent("onLoadError", function(text, xml, ajax, owner){
      //text - response text
      //xml - response xml object
      //ajax - xmlHttpRequest object
      //owner - component which triggered error
      
      ... custom code ...
});
~~~

Component Error Events
-----------------

At the same time, each data component features its own **onLoadError** event with the same parameters:

~~~js
$$('list').attachEvent("onLoadError", function(text, xml, ajax, owner){ .. }
~~~

Furthermore, you can connect a custom error handler to a specific data requests. 

~~~js
$$('list').load("data.php",{
    success:function(text, xml, ajax){ ... },
    error:function(text, xml, ajax){ ... }
});
~~~

The same syntax  is used for  **webix.ajax** requests: 

~~~js
webix.ajax("data.php", {
    success:function(text, xml, ajax){ ... },
    error:function(text, xml, ajax){ ... }
});
~~~

@complexity:3