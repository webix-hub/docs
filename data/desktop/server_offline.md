Offline Support
==============================

Offline support allows storing server-side data locally in your browser cache which helps you go on working with data components after refresh when connection to server fails. 

##Saving the whole page via Cache Manifest

Files subject to caching, should be listed in a cache manifest, a typically HTML5 feature, which allows for differentiating between files available in an offline mode from those available when you are connected. 

Firstly, the manifest is included into each web page you'd like to be cached. 

~~~js
<!DOCTYPE html>
<html manifest="app.appcache">
~~~

Secondly, manifest details are specified in the *app.appcache* file. As a rule, the following files should be cached: 

~~~js
offline_app.html //each application file itself, 

../../../codebase/webix.js //library files
../../../codebase/webix.css

data/data.json //data-loading file 
~~~

##Offline Support for Webix Component Data

Offline support is implemented via three load and save modes:

- **offline** and **cache** - both working with server-side data that is additionally stored locally; 
- **local** - works with local storage data only. 

###Offline Mode

Offline mode ensures that server-side data will be stored locally in browser and later on, the component will always try to reach server to get or save data BUT in case of failure, the data
will be loaded from cache and stored in cache, accordingly. When you are connected again, all changed data should be derived from cache and sent to server (otherwise on next page refresh it will be replaced by outdated 
server-side data). 

Webix works with cache through its **webix.storage.local** interface. See the description of [caching logic](desktop/offline.md#app).

To enable this, use **offline** prefix before load and save scripts:

~~~js
{
	view:"datatable",
    id:"datatable1",
    ..config..
	save: "offline->server/datatable.php",
	url: "offline->server/datatable.php"
}
~~~

{{sample 40_serverside/03_php_custom/05_datatable_offline.html}}

Or, if you load data after component initialization, pass this prefix (*offline or cache*) to api/link/dataloader_load.md function together with load script itself:

~~~js
//two methods are equal
$$("datatable1").load(offline->server/datatable_load.php);
$$("datatable1").load(webix.proxy("offline", "server/datatable_load.php"));

//or, if you want to load data in POST request:
$$("datatable1").load( webix.proxy("offline", "post->url.php"));
~~~

In essence, the prefix signifies integration with a dedicated **proxy object** that contains all the logic of offline storage. [Proxy objects](desktop/server_proxy.md) are described separately. 

###Cache Mode

When you enter cache mode, data is first loaded to component and put to browser local storage and then you work ONLY with this cached data: it's loaded from cache and stored to it without trying to connect to server. 

Webix works with cache through its **webix.storage.local** interface. See the description of [caching logic](desktop/offline.md#app).

To enable this, use **cache** prefix before load and save scripts:

~~~js
{
	view:"datatable",
    id:"datatable1",
    ..config..
	save: "cache->server/datatable.php",
	url: "cache->server/datatable.php"
}
~~~

{{sample 40_serverside/03_php_custom/03_datatable_cache.html}}

Or, if you load data after component init, pass this prefix (*offline or cache*) to api/link/dataloader_load.md function together with load script itself:

~~~js
//two methods are equal
$$("datatable1").load(cache->server/datatable_load.php);
$$("datatable1").load(webix.proxy("cache", "server/datatable_load.php"));

//or, if you want to load data in POST request:
$$("datatable1").load( webix.proxy("cache", "post->url.php"));
~~~

In essence, the prefix signifies integration with a dedicated **proxy object** that contains all the logic of offline storage. [Proxy objects](desktop/server_proxy.md) are described separately.

###Local Mode

When you work in local mode, your component deals with local storage objects only. You can load data from local storage and save it there without any server-side part. 

Webix works with cache through its **webix.storage.local** interface. See the description of [caching logic](desktop/offline.md#app).

In local mode, you should provide names of **localStorage objects** instead of URLs:

~~~js
{
	view:"datatable",
    id:"datatable1",
    ..config..
	save: "cache->mydata",
	url: "cache->mydata"
}
~~~

Neither offline, nor cache modes allow accessing localStorage objects, but local mode makes it possible.

##Working with Cached Data 

Both of these [proxy objects](desktop/server_proxy.md), **offline** and **cache**, offer API for working with currently cached data. Methods are applied to the component's **url** property object:

~~~js
$$("datatable1").config.url.someMethod();
~~~

- **clearCache()** - to remove cached data of this component;
- **setCache**(data) - pushes any data to cache. Data should be passed as JSON object or JSON string;
- **saveAll()** - serializes current component data  and pushes it to cache;
- **getCache** - gets the latest copy of cached data for this component in the form of JSON object. It can be used to populate the component with the help of api/link/dataloader_parse.md method. 

###Setting Static Cache

In addition, you can manually set data for component cache. Here you manipulate Webix proxy objects. 

Firstly, you should create **cache [proxy object](desktop/server_proxy.md)**. It includes server script for data loading:

~~~js
var static_proxy = webix.proxy("cache", "server/datatable.php");
~~~

This object should be used for data loading(**url**) and saving(**save**):

~~~js
var grid = {
	view:"datatable",
    ..config..
	save: static_proxy,
	url: static_proxy
};
~~~

Then, you set necessary data to this object via the **setCache()** method:

~~~js
if (!static_proxy.getCache())
	static_proxy.setCache([
		{"id":1,"title":"The Shawshank Redemption ", 
			"year":"1998","votes":194865,"rating":"7.5","rank":1},
		{"id":2,"title":"The Godfather",
			"year":"1974","votes":511495,"rating":"9.2","rank":2}
	]);
~~~

{{sample 40_serverside/03_php_custom/04_datatable_cache_static.html }}

Proxy objects are described in detail in the [corresponding article](desktop/server_proxy.md).

@complexity: 2
