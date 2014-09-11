Saving and Restoring Application State
===========================

Webix [UIManager](api/refs/uimanager.md) allows saving current visual scheme of the component, its 'state' with the following methods: 

- [getState()](api/uimanager_getstate.md)  - to capture current state of a Webix application; 
- [setState()](api/uimanager_getstate.md) - to set the saved state for the application. 
 
The data for the state itself is stored in the [webix.storage.local](desktop/offline.md) object (non-pro), which is your browser cache. Simply put, data is saved to your local machine. 

The state of any view included into the application state object contains the following information:

~~~js
{
	id:"main", 
    width:500, 
    height:400, 
    gravity:1 
}
~~~

Some views  featuring tabs, panels or cells in their configuration contain additional properties:
~~~js
{
	collapsed:"tab1", //currently collapsed panel
    activeCell:"tab2" //currently active tab
}
~~~

##Getting and Saving State

The **getState** method is called from the UIManager and gets the app's general structure (namely ID, width, height, gravity). It takes two arguments:

- the **ID of the component** which state you'd like to save (as a rule, the ID of the top-most component, layout);
- boolean **true or false** for component children. If true, state of nested components is saved alongside with layout state. 

To save the data and make it usable later on, your should **put** it into the local storage, defining the key for it:

~~~js
webix.attachEvent("unload", function(){
    webix.storage.local.put("stateApp", webix.UIManager.getState("main", true));
});
~~~

##Restoring State

To use the method, you should firstly **get** the stored data from the local storage (using the key you defined for it at the previous step):

~~~js
var stateApp = webix.storage.local.get("stateApp");
~~~

And then call **setState** from UIManager to restore the state of the application.


~~~js
if(stateApp)
   webix.UIManager.setState(stateApp);
~~~

{{sample 60_pro/03_api/02_state.html}}

@edition:pro