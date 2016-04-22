Webix Proxy Objects
=======================

Either the component's api/link/dataloader_url_config.md property or its api/link/dataloader_load.md function can be used not only for passing loading script, but can include additional loading logic in **proxy objects**. 

Built-in Proxy Objects

There's a list of ready-to-use Webix proxy objects that can be used by adding prefixes to a loading script.

- **offline** and **cache**  - for application [offline support](desktop/server_offline.md) of applications that use serverside data;
- **local** - for saving component data into browser local storage and working with it. Described as part of [offline support](desktop/server_offline.md) article;
- **connector**  - for saving data via [Server Side Connector](desktop/dataconnector.md);
- **rest** - for working with server in [REST mode](desktop/server_rest.md);
- **post** - for loading data in POST request (GET by default);
- **sync** - for loading data via a synchronous Ajax request (by default, loading is performed by an asynchronous request);
- **indexdb** - for working with [indexedDB](desktop/server_indexdb.md) in-browser database storage;
- **faye** - for enabling live data update on all clients currently using the application. [Look here for details](desktop/server_faye.md);
- **binary** - for loading and reading files as arraybuffer;
- **json** - for sending JSON data to server via RESTful "save" requests with "application/json" content type.



Prefixes are used before the path to you serverside script:

~~~js
var list = {
	view:"list"
	url:"offline->load.php",
    save:"offline->load.php" 
};

grid.load("rest->load.php")
~~~

{{note
You can browse the samples of Proxy usage by a [link](http://docs.webix.com/samples/40_serverside/03_php_custom/index.html).
}}

##Using methods of Built-in Proxy Objects

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
	load:function(view, callback){
		//your loading pattern
        ...
		webix.ajax(this.source, callback, view);
	},
	save:function(view, update, dp, callback){
    	//your saving pattern for single records
        ...
		webix.ajax().post(url, data, callback);
    },
    saveAll:function(view, update, dp, callback){
    	//your saving pattern 
        ...
        for (var i = 0; i < updates.length; i++) { ... }
    },
    result:function(state, view, dp, text, data, loader){
    	//your logic of serverside response processing
        ...
        dp.processResult(state, data, details);
    },
    //other custom properties and methods
    prop1:value1,
    method1:function(){ ... }
};
~~~

Predefined methods that can be customized include: 

- **load**(view, callback) - is used for data loading and takes two parameters: 
	- view - *object* - the component you work with;
    - callback - *function, object* - loading callback;
- **save**(view, update, dp, callback) - is used for saving of single records and triggers when changes occur on client side. Takes four parameters: 
	- view - *object* - the component you work with;
    - update - *array* - array of changed records, each of which contains data object, record id and operation name;
    - dp - *object* - DataProcessor object;
    - callback - *function, object* - saving callback;
- **saveAll**(view, update, dp, callback) - is called after saving of a single record is complete to catch up for other changes occured in the component. Takes the same parameters as save();
- **result**(state, view, dp, text, data, loader) - is called after data is saved and serverside response is received. Takes five parameters: 
	- state - *object* - operation state;
    - view - *object* - the component you work with;
    - dp - *object* - DataProcessor object;
    - text - *string* - serverside response text;
    - data - *object* - raw data of serverside response; 
    - loader - *object* - XHR loader object.
	

To use a custom proxy, append its name as prefix to a loading or saving script (or both, is needed): 

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
