Webix REST Mode Support
==========================

Webix features support for REST load and save protocol. 

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

You can as well init **REST proxy object** and set is as value of url and save properties. For these needs **webix.proxy()** function receives *rest* prefix and path to your serverside *save script*. 

~~~js
var rest = webix.proxy("rest", "server/datatable_rest.php");
~~~

**REST Load and Save Pattern**

- On loading GET request is executed and data in any of [supported data formats](desktop/data_types.md) is returned;
- When [editing](desktop/edit.md) happends or [update()](desktop/update.md) method is called - PUT request is generated, item ID and other params are sent to the script. Item ID is shown in the address line; 
- When item is added inside the component - POST request is generated, item ID and other params are sent to the script. Item ID is shown in the address line;
- When item is removed from th component - DELETE request is generated, item ID is sent to the script. 

Save script treats adding, editing and deleting operations separately and should contain different code on the base of request method. 

**Serverside Response**

Serverside response is set like with [any custom script](desktop/custom_serverside.md#response).

@index: 
  - desktop/custom_serverside.md
@complexity:2



