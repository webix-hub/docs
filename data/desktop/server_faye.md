WebSockets (Faye)
=================

Faye [proxy object](desktop/server_proxy.md) is used to ensure **live data update** on all the clients currently using the application with this feature. 
It is based on [Faye](http://faye.jcoglan.com) publish-subscribe messaging system which is in turn based on the [Bayeux](http://svn.cometd.com/trunk/bayeux/bayeux.html) protocol. 

**Faye** proxy object is useful for creating corporate chats clients. It can be used with any Webix **data component** while [list](desktop/list.md) is the most suitable one a chat.  

Proxy object is defined within the component constructor with the help of [url](api/link/datacollection_url_config.md) and [save](api/link/datacollection_save_config.md) properties:

~~~js
{
	view: "list", 
    id:"chat", 
	url: "faye->/data", 
    save: "faye->/data"
}
//or, to load data after component initialization
$$("chat").load("faye->/data");
~~~

- **Url** property, as well as [load](api/link/datacollection_load.md) method is used to define data source for the component. Here it includes **proxy name** (Faye) and **storage name** on your Faye server (any);
- **Save** property enables data saving to the chosen storage. On page refresh up-to-date data is loaded into the component.

Storage name must contain **slash** at the beginning.

**Starting Faye server**

Besides, you need to provide standard logic to staring **Faye server**:

~~~js
var http = require('http'),
faye = require('faye');

var server = http.createServer(),
bayeux = new faye.NodeAdapter({mount: '/'});

bayeux.attach(server);
server.listen(8000);
~~~

**Initializing Faye client**

And define **Faye client** and its **ID** that are required for **faye** proxy:

~~~js
webix.proxy.faye.client = new Faye.Client('//localhost:8000/');
webix.proxy.faye.clientId = webix.uid(); //or any custom pattern
~~~

**Related Sample**

To play with the feature, load and unzip the [demo](../../samples/40_serverside/04_websockets/01_sockets_chat.zip). Don't forget about NodeJS server running. 
