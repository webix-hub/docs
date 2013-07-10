Offline Support
=============

Offline support is a handy feature for developers to keep in mind. It enables application work in an offline mode by storing data locally in your browser cache that acts as a 'medium' storage for data loaded from server. 

Files subject to caching, should be listed in a cache manifest, a typically HTML5 feature, which allows for differentiating between files available in an offline mode from those available when you are connected. 

##Cache Manifest

Firstly, the manifest is included into each webpage you'd like to be cached. 

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

##Local Storage

Once the connection with the internet has been established, data is loaded into the component and, additionally, is cached to your local machine. In case of a disconnect, the data is loaded from cache as well as all the changes 
you've made are cached until you can connect to the server again. 

The results of the CRUD (create, read, update, delete) operations are sent back to server each time a user makes an update request. 

- If you are **connected** to the network data is updated on server AND on local machine. 
- Otherwise(**server is unavailable**), the update concerns only the copy in cache. Later, on successful update request - in an online mode - the latest copy of the cached data is pushed to server.  

This functionality is set within the [load](api/link/dataloader_load.md) function where you specify the loading pattern. 

You can get to the browser cache through the library's **[webix.storage.local](api/refs/storage.local.md)** interface where you put the data and get it later. 

- **webix.storage.local.put**("key", "data"); - adds the specified data to the local storage and saves it under the specified key;
- **webix.local.storage.get**(key); - gets the data saved from the local storage by the specified key. 

These methods should be used in a **load** function of the **url** object. 

~~~js
webix.ui({
	view:"some_component",
	...
    url:{
		$proxy:true, //  a flag used to pass loading to the load function below
		load:function(){
        ...}
        }
   })        
~~~

##Offline Support Logic

The logic of the necessary loading pattern is as follows: 


1 .  On component initialization the data is **loaded from server** using the url you specify AND **put to the local storage**. (Success!)

2 .  New data you add/edit within the component is **cached** anyway, regardless of current network availability. For these needs, the **put()** method is attached to the view through the **"onEditStop"** event; 

3 .  Since data  is stored locally in **JSON** format, any newly added data must be **serialized**, i.e. transformed to the JSON object. It's performed with the **serialize** function;

4 .  **On update request** the app checks whether it an online or an offline mode:
	
- **online** (success): the data is updated in the component and on server using the url you specify AND put to the local storage. 
- **offline** (error): the data comes from the local storage, both data that was loaded intially plus changes you've made while offline. **Parse()** method is used here to parse a JSON string from your browser cache. 

{{snippet
Datatable Offline
}}
~~~js
webix.ui({
	url:
	{	
		$proxy: true,	
		load: function(view) 
			{	//save data after editing	
				view.attachEvent("onAfterEditStop", function(){
				webix.storage.local.put("app_data", this.serialize());
				});
				view.load("data/data.json", 
					{success: function(text) 
						{//fresh data, save in cache	
						webix.storage.local.put("app_data", text)
								},			
					error: function() {	//probably in offline mode
						view.parse(webix.storage.local.get("app_data"));			
								}		
					});	
			}
		} 
})
~~~

{{sample 
15_datatable/18_state/01_basic.html
}}

@complexity:3
