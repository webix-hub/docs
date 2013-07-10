Management of loading errors
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

Global Error Handlers
-----------------------------

You can create your own **loading error hander**:

~~~js
webix.attachEvent("onLoadError", function(text, xml, ajax, owner){
      //text - response text
      //xml - response xml object
      //ajax - xmlHttpRequest object
      //owner - component which triggered error
      
      ... custom code ...
});
~~~

as well as attach it to any UI component. 

~~~js
$$('list').attachEvent("onLoadError", function(text, xml, ajax, owner){ .. }
~~~

If needed, you can connect a custom error handler with specified data requests. 

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