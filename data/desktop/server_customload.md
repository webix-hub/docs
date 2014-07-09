Customozing Loading Pattern. Ajax Loading and Parsing. 
================================

By default Webix loads data to its component by an asynchronous Ajax GET request. However, various modifications are possible. 

##Loading Data via POST Request

By default data is loaded via GET request. To change it to POST, use **post** prefix.

~~~js
{
	view:"datatable",
    ..config..
    url: "post->load.php"
}
~~~

##Loading Data via Synchronous Ajax Request

You can change the request to a synchronous one (sometimes it may be useful). 

~~~js
{
	view:"datatable",
    ..config..
    url: "sync->load.php"
}
~~~

##Modifying  Background Ajax Requests

There exists no possibility to modify background Ajax requests sent by the above pattern. 

However, you can catch Webix **onBeforeAjax** event to modify ANY Ajax request on the page (so be attentive): 

{{snippet
Sending Headers
}}
~~~js
webix.callEvent("onBeforeAjax", function(mode, url, data, request){
 	request.setRequestHeader("Content-type","application/json");
})
~~~

Note that Webix [Ajax module](helpers/ajax_operations.md) (described below) features a **built-in functionality** for sending **headers** with serverside requests. 

##Loading with Webix Ajax Helper

To load data on demand without breaking application flow, you can resort to [Webix Ajax interface](helpers/ajax_operations.md). 

~~~js
//get request (default)
webix.ajax("data/load.php",function (text,data){
	$$("list").parse(text);
});
~~~

Serverside script should return **inline data** in any of [supported data types](desktop/data_types.md) so that it can be [parsed](api/link/datarecord_parse.md) into the necessary component. 

Above snippet will set the new data for list. To add new data to the existing list data, define start position for parsing:

~~~js
webix.ajax("data/load.php",function (text,data){
	$$("list").parse({
    	pos: $$("list").count(), //start position
      	data:text
    });
});
~~~

For setting the necessary **serverside response** manually, [see the dedicated article](desktop/custom_serverside.md#response). As to [Server Side Connector](desktop/dataconnector.md), they return data in JSON or XML format depending 
on connector type. 

Ajax loading allows **passing params to serverside script** as GET request:

~~~js
webix.ajax("server/load.php?id="+id, function(text, data){
	...//callback
});
~~~

Learn more about [Webix Ajax Operations](helpers/ajax_operations.md).

##Adding Extra Functionality to Loading Functions

Here you should consult:

- Ready-to use proxy objects for [offline support](desktop/server_offline.md);
- Proxy object for working in [REST mode](desktop/server_rest.md);
- Guidlines about [proxy objects](desktop/server_proxy.md) and custom proxy objects in particular.

@complexity:2

