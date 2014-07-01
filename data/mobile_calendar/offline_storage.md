Offline Storage
=====================


In this article we want to tell you how to make an application be accessible offline and not to depend on the state of the network.

Generally, to make an app work in the offline mode you should use the [**webix.proxy**](desktop/server_proxy.md) component. 
The component allows sending web requests via HTTP proxy and storing the latest successful data files and unsuccessful web requests locally.

<img style="display:block; margin-left:auto;margin-right:auto;" src="mobile_scheduler/dhx_proxy.png"/>

How does an application using webix.proxy work?
---------------------------------------------

###Loading data


Each time data needs loading, the app passes a request to the server via the proxy-server. 
If the server is available, data is loaded from it and cached as the latest copy. If the server is unavailable, data is loaded from the local storage.

Note that the local storage contains data only if the app has been run with available connection to the Internet at least once.

###CRUD operations

- When a user makes a request for update, it (the request) is passed to the server via proxy-server. If the request is satisfied, it updates the latest copy. 
If the request isn't satisfied, it's cached in the local storage.

- Each time a user makes a request, [**webix.proxy**](desktop/server_proxy.md) checks the presence of unsuccessful requests in the local storage. 
If there are any kept, they are passed to the server.

- As soon as an unsuccessful request is satisfied, it updates the latest copy and is removed from the local storage.

{{note
To cache not only the entered data, but also the application resources (js, css files, images, etc.) you may use webix.proxy 
together with the ApplicationCache interface (HTML5 feature).
}}

How to use webix.proxy?
------------------------

[**webix.proxy**](desktop/server_proxy.md) is an easy-to-use component.
To start use it:

- [initialize webix.proxy](mobile_calendar/offline_storage.md#initialization);
- set the [**webix.proxy**](api/_proxy.md) instance as:
	- the **save** parameter of the object constructor;
	- the **url** parameter of the [load()](api/link/dataloader_load.md) method.

~~~js
var source = new webix.proxy({
	url: "../data/events_mobile.php",
	storage: webix.storage.session
});
webix.ready(function(){
	webix.ui.fullScreen();
    webix.ui({
		view: "scheduler",
		id: "scheduler",
		save: source
	});
	$$("scheduler").load(source, "json");
});
~~~

**Related sample**: samples/03_offilne/01_offline.html

Initialization
-------------------

**webix.proxy** can be initialized in the following way:

~~~js
var source = new webix.proxy({
	  url: "../data/events_mobile.php",
	  storage: webix.storage.session
});
~~~

The constructor takes 2 parameters:

- **url** - (url) defines the path to a php file that defines the server side logic;
- **storage** - ([webix.storage.local, webix.storage.session, webix.storage.cookie](desktop/offline.md)) specifies the data storage type. 
It's an optional parameter. The default value is webix.storage.local.