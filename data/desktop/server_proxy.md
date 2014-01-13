Webix Proxy Objects
=======================

Either the compoent's api/link/dataloader_url_config.md property or its api/link/dataloader_load.md function can be used not only for passing loading script, but can include additional loading logic in **proxy objects**. 

Built-in Proxy Objects

There's a list of ready-to-use Webix proxy objects that can be used by adding prefixes to a loading script.

- **offline** and **cache**  - for application [offline support](desktop/server_offline.md);
- **connector**  - for saving data via [Server Side Connector](desktop/dataconnector.md);
- **rest** - for working with server in [REST mode](desktop/server_rest.md);
- **post** - for loading data in POST request (GET by default);
- **sync** - for loading data via a synchronous Ajax request (by default, loading is performed by an asynchronous request);
- **indexdb** - for working with [indexedDB](desktop/server_indexdb.md) in-browser database storage;
- **faye** - for enabling live data update on all clients currently using the application. [Look here for details](desktop/server_faye.md).

Prefixes are used before the path to you serverside script:

~~~js
var list = {
	view:"list"
	url:"offline->load.php",
    save:"offline->load.php" 
};

grid.load("rest->load.php")
~~~

##Using methods of Biult-in Proxy Objects

Methods of a proxy object are called from the **url** of the component it's used for: 

~~~js
//returns cached data for this list
list.config.url.getCache();
~~~

You can also save an instance of the necessary proxy object in a **variable** and call all methods from it: 

~~~js
var static_proxy = webix.proxy("cache", "server/datatable.php");

var grid = {
    view:"datatable",
    ..config..
    save: static_proxy,
    url: static_proxy
};

if (!static_proxy.getCache())
    static_proxy.setCache([
        {"id":1,"title":"The Shaushenk Redemption ", 
            "year":"1998","votes":194865,"rating":"7.5","rank":1},
        {"id":2,"title":"The Godfather",
            "year":"1974","votes":511495,"rating":"9.2","rank":2}
    ]);
~~~

{{sample 40_serverside/03_php_custom/04_datatable_cache_static.html}}

##Customizing Built-in Proxy Objects

You can add extra functionality to built-in proxy objects or redefine existing properties or methods by [extending their functionality](desktop/extending_components.md). 

For instance, you can change the default place for storing cached data of an **offline** proxy object, which is [webix.storage.local](desktop/offline.md) by default:

~~~js
webix.proxy.myCustomName = {
	init:function(){
		webix.extend(this, webix.proxy.offline);
	},
	cache: some_place_you_choose
};
~~~    

And then use it as prefix to load and save scripts: 

~~~js
{
	view:"datatable",
    url:"myCustomName->load.php", 
    save:"myCustomName->load.php"
}
//or, after component init
$$("datatable1").load("myCustomName->load.php"); 
~~~

##Creating Custom Proxy Objects

Proxy object is a plain JSON object you create to add extra functionality to your loading and saving pattern. 

It features

- compulsory **$proxy** property set to *true*;
- other properties;
- functions to fire on loading and saving;
- other methods. 

Proxy objects

~~~js
webix.proxy.myCustomName = {
	$proxy:true
	prop1:value1,
    ...
	load:function(view, callback){
		//you loading pattern	
		webix.ajax(this.source, callback, view);
	},
	save:function(view, update, dp, callback){
    	//your saving pattern
		webix.ajax().post(url, data, callback);
    }
};
~~~

And then use it as prefix to load and save scripts: 

~~~js
{
	view:"datatable",
    url:"myCustomName->load.php", 
    save:"myCustomName->load.php"
}
//or, after component init
$$("datatable1").load("myCustomName->load.php"); 
~~~

@complexity:3
