REST Mode Support
==========================

Webix features full support for REST load and save protocol. 

To enter REST mode, use prefix **rest** before load and save scripts. This will enable the necessary [proxy object](desktop/server_proxy.md).

~~~js
{
	view:"datatable",
    ..config..
	save: "rest->server/datatable_rest.php",
	url: "rest->server/datatable.php"
}
~~~

{{sample 40_serverside/03_php_custom/02_datatable_saving_rest.html}}

You can as well initialize **REST proxy object** and set is as the value of the *url* and *save* properties. 
For these needs **webix.proxy()** function receives *rest* prefix and path to your serverside *save script*. 

~~~js
var rest = webix.proxy("rest", "server/datatable_rest.php");
~~~

REST Load and Save Pattern
-------------------

- On loading GET request is executed and data in any of [supported data formats](desktop/data_types.md) is returned;
- When [editing](desktop/edit.md) happens or [update()](desktop/update.md) method is called - PUT request is generated, item ID and other params are sent to the script. Item ID is shown in the address line; 
- When item is added inside the component - POST request is generated, item ID and other params are sent to the script. Item ID is shown in the address line;
- When item is removed from the component - DELETE request is generated, item ID is sent to the script. 

Save script treats adding, editing and deleting operations separately and should contain different code on the base of request method. 

Server-Side Response
-----------------------

Server-Side response is set the same as with [any custom script](desktop/custom_serverside.md#response).

Note that [Webix DataProcessor](desktop/dataprocessor.md) can be tuned to update client-side data from response automatically:

~~~js
view:"datatable",
save: {
	url:"rest->server/datatable_rest.php",
    autoupdate:true
}
~~~

A short response in the JSON format:

~~~js
{"status":"ok"}
//or
{"tid":121}
~~~

A more complex example can look as:

~~~js
{"action":"update", "id":15, "newid":15}
~~~

If you need to return an error, the response should be as follows:

~~~js
{"action":"error", ...}
~~~

###Response Types

The following types of response are predefined: *update*, *insert*, *delete*, *invalid* and *error*.

You can pass any data in a JSON response. Besides, the response can be received on the client side by means of the api/dataprocessor_onafterupdate_event.md event. 


@complexity:2



