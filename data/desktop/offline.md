Webix Storage Interface
=============

Webix library offers its own API for working with application cache and browser local storages - permanent cache, per session cache and cookies.

Accordingly, **webix.storage** module contains three objects: 

- [webix.storage.local](api/refs/storage.local.md) - works with window localStorage object;
- [webix.storage.session](api/refs/storage.session.md) - works with window sessionStorage object;
- [webix.storage.cookie](api/refs/storage.cookie.md) - works with document cookie object.

The objects share three methods:

- **put**(*name, data, [domain, expires]*) - the last two params concern only cookie storage. The method allows putting data to browser cache under the stated name. Data is passed as JSON object;
- **get**(*name*) -  the method derived stored data from local cache for further usage. Data comes in JSON format;
- **remove**(*name, [domain]*) - the last param concern only cookie storage. The method removes data saved under the stated name from local cache.  

##Working with Local Storage

Local storage can be used for storing any application data, e.g. current state of a component derived with [getState()](api/datastate_getstate.md) method. 

To do this, you **put()** state object into Webix local storage under a **custom name**. Data you save should be in **JSON** format(which is exactly what getState() returns). 

~~~js
function save_state(){
	webix.storage.local.put("state", grid.getState());
}
~~~

If data you'd like to save is plain Javascript object, apply Webix [serialize()](api/datastore_serialize.md) method to it. 

To retrieve data from local storage, use **get()** method pointing to the name under which you've save this or that data. 

~~~js
function restore_state() {
	var state = webix.storage.local.get("state");
	if (state)
		grid.setState(state);
}
~~~

{{sample 
60_pro/01_datatable/05_state/03_session_state.html
}}

To save and track state of a multiview-based app, follow [other instructions](desktop/history_track.md). 

##Using Local Storage for Offline Support of ServerSide Applications {#app}

Local storage interface can be used for **storing serverside data** in case of disconnect, which ensures that local changes won't be lost even after page refresh.

Local storage functionality is set by adding a prefix of desired mode - **cache** or **offline** to you load and save scripts.

~~~js
webix.ui({
	view:"datatable",
    ..config..
	url:"offline->load.php",
	save:"offline->save.php"
});
~~~

In either of these modes, serverside data is loaded to a component, and is additionally cached to your machine( **webix.local.put()** function is executed in background). 

What happens next depends on the chosen mode:

**Offline** mode: 

- The component will always try to get up-to-date data data from server. If server is unavailable, data is reloaded from cache (*webix.local.get()* function is executed behind the scene). That's why you can refresh page as
many times as you wish;
- Data changes you make while online are pushed to server and to cache. So cache will always contain the latest copy of serverside data;
- Data changes you make while offline, are pushed to cache only and should be sent to server manually.

**Cache** mode: 

- Once data has been loaded to a component it is put to cache (local storage) and later on the component will work only with cached data without trying to get to server;
- Data changes you make while either offline or online are pushed to cache and should be sent to server manually.

**Local** mode: 

- The component works with in-browser local storage only. Data is loaded from there (is any), and all CRUD operations are saved to local storage;
- You can access localStorage objects to get data from and put data to. 

Read also main [Offline Support](desktop/server_offline.md) article. 

##Working with cached data



Although Webix library offers a ready-to-use solution, you can write your own [proxy object](desktop/server_proxy.md) to enable offline support and set it as the component's **url** property:

~~~js
webix.ui({
	view:"datatable", 
    ..config..
    url:{   
        $proxy: true,   
        load: function(view) {//save data after editing   
             view.attachEvent("onAfterEditStop", function(){
             	webix.storage.local.put("app_data", this.serialize());
              });
             view.load("data/data.json", {
             	success: function(text){//fresh data, save in cache    
                     webix.storage.local.put("app_data", text)
                },          
                error: function(){ //probably in offline mode
                     view.parse(webix.storage.local.get("app_data"));            
                }       
            }); 
        }
     } 
});
~~~

- **onAfterEditStop** event is used to catch data changes and put edited data to cache;
- cached data is inline data, that's why it is **parsed** into a component, not loaded. 



@complexity:3
