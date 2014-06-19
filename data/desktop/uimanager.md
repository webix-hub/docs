UI Manager
=============

Each time you create a component on the page, even a single one, **UIManager** module is initialized (though indirectly). Its main tasks are to 

- control which component (and component item) is focused at the moment;
- set and remove focusing;
- assign keyboard events to the component in focus;
- memorize the component's outer scheme. 

At the same time, you can set and remove focus programmatically with the help of two opposite methods - **focus()** and **blur()** that are called from the component object. It can be
specified in the component's **ready** property to set/remove focusing on page loading. 

The **focus()** method is either used without parameters or takes an **ID** or **name** of an item as an argument. In the latter case, focus is set to this item rather to the whole component. 

~~~js
$$('my_toolbar').focus(); // the toolbar is focused
$$('my_toolbar').blur(); //the toolbar is no longer in focus

$$('my_toolbar').focus('my_text'); 
// a text input with ID/name = "mytext" on this toolbar is focused
~~~

UIManager makes 'focus events' possible (onFocus, onFocusChange). For instance, **onFocusChange** event is triggered each time focus is shifted from one component to another. 

The following code retrieves the ID of the view that is in focus now and puts in into the console log. There isn't great practical use from it, yet it shows how UI Manager works. 


{{snippet
Watching focus changes
}}
~~~js
webix.attachEvent("onFocusChange", function(view, prev_view) {
		webix.console.log("focused: " + (!view ? 'null' : view.config.id));
		});
~~~

{{sample 15_datatable/04_editing/01_basic.html }}
 
Through UI Manager you can manage focus in the app with the help of the following methods (all of them are called from UIManager with the ID of the needed view as an argument): 

- **getFocus** - returns the view object that is currently focused; 
- **setFocus** - sets focus into the specified location;
- **hasFocus** - checks whether the component is in focus and returns *true* or *false* respectively
- **canFocus** - checks whether the component can take focus. Invisible (hidden) views and their items as well as disabled views cannot be focused. 

{{snippet
Focusing an item with ID 'books'
}}
~~~
webix.ui({
	id:"books",
	view:"list"
    ...
   })

webix.UIManager.setFocus("books");
~~~

##Keyboards Events and Hotkeys

###Built-in Keyboard Events 

1) 'Esc' key closes a non-modal [window](desktop/window.md) when it is focused. 

2) 'Esc', 'space' and 'enter' keys are enabled by default for [modal message boxes](desktop/message_boxes.html#modalwindowsandkeyboardinteraction).

3) [Editors](desktop/editing.md) of data component items react on the following keys: 

- 'esc' - to close without saving data changes;
- 'enter' - to close with data changes saved.

For other situations keyboard can be connected to your application in several ways: 

###Attaching Hot keys

####Component Navigation Keys

Hotkeys for navigation (arrow keys, Home, End, Page Up, Page Down) in data components like [datatable](datatable/index.md) and [list](desktop/list.md) can be enabled by [navigation](api/keysnavigation_navigation_config.md) property: 

~~~js
{ view:"datatable",  navigation:true }
~~~

{{sample 15_datatable/05_selection/09_navigation.html}}

Other data components need to be extended with the [KeysNavigation](api/refs/keysnavigation.md) module. Consult the [dedicated article](desktop/selection.md#navigation) for details. 

####Hotkeys for Controls

For controls there exists a possibility to define a hotkey that will trigger it onClick event. The key name (e.g. 'enter' or 'space') is specified by **hotkey** property: 

~~~js
{ view:"button", click: doOnClick, hotkey: "enter" }
~~~

{{sample 13_form/02_api/12_hotkey.html}}

The *doOnClick* function will fire now either or pressing 'enter' or on clicking. 

Key combinations joined by **+** or **-** sign are as well possible: 

~~~js
{ view:"button", click: doOnClick, hotkey: "enter-shift" }
~~~

Note that such functionality will work with simple controls like buttons and inputs, not with multiple-choice one. 

####Defining Custom Hotkeys

The **addHotKey** function is called from the UIManager object and has two mandatory parameters - key name and event handler. Key combinations joined by **+** or **-** sign are as well possible. 

You can make hot keys **global**, which means that they will trigger the function regardless of the component. The one in focus will be subject to hot key actions. 

~~~js
webix.UIManager.addHotKey("Ctrl+V", function() { webix.console.log("Ctrl+V for any");});
~~~

At the same time, you can specify any instance of a **Webix component** that should react on this or that hot key by passing the its into the function as a third parameter. 

In case you want all the view instances react on the specified hot key, state the view name instead of ID: 

~~~js
//hot keys for the component with 'details' ID
webix.UIManager.addHotKey("Ctrl+Enter", function() { 
	webix.console.log("Ctrl+Enter for details"); 
    return false; 
}, $$('details')); // for "details" list only


//hot keys for all list instances on the page.
webix.UIManager.addHotKey("Ctrl+Space", function() { 
	webix.console.log("Ctrl+Space is detected for list"); 
}, 'list'); // for all lists on the page
~~~

{{sample 15_datatable/04_editing/01_basic.html }}

###Attaching Keyboard events 

- **onKeyPress** *(code, ctrl flag, shift flag, native event)* - takes key codes to perform actions on pressing the specified key/keys. 
- **onEditKeyPress** *(code, ctrl flag, shift flag, native event)* - has the same functionality as the event above, but the event can be applied to an opened editor. 
- **onTimedKeyPress** - fires with delay and starts function execution only when a user stops typing.

In the code below the 'Enter' key opens 'details' accordionitem. Before this, you check that it is not combined with either Ctrl, Shift or Alt key: 

{{snippet
'Enter' key in action
}}
~~~js
$$("books").attachEvent("onKeyPress", function(code, e) {
	if (code === 13 && !e.ctrlKey && !e.shiftKey && !e.altKey) {
		$$('details').getParentView().expand('details');
	return false;
    }
});
~~~

These events require that a developer should know key codes used by UI Manager. Here they are: 

####Key Codes

- 'enter': 13,
- 'tab': 9,
- 'esc': 27,
- 'escape': 27,
- 'up': 38,
- 'down': 40,
- 'left': 37,
- 'right': 39,
- 'pgdown': 34,
- 'pagedown': 34,
- 'pgup': 33,
- 'pageup': 33,
- 'end': 35,
- 'home': 36,
- 'delete': 46,
- 'backspace': 8,
- 'space': 32,
- 'meta': 91,
- 'win': 91,
- 'mac': 91

##Saving and Restoring Application State

UIManager allows saving current visual scheme of the component, its 'state' by using **getState()** and **setState()** methods. The former derives necessary data (list of component properties with their current values) 
 while the latter sets these values for the specified properties. 
 
The data itself is stored in the **webix.storage.local** object, which is your browser cache. Simply put, data is saved to your local machine. 

###getState();

The **getState** method is called from the UIManager and gets the app's general structure (namely ID, width, height, gravity). It takes two arguments:

- the **ID of the component** which state you'd like to save (as a rule, the ID of the top-most component, layout);
- boolean **true or false** for component children. If true, state of nested components is saved alongside with layout state. 

{{snippet
Saving current state of layout and its children
}}
~~~js
var state = webix.UIManager.getState('top_id', true); //ID of the layout is used
~~~

The function returns data in JSON format, like this: **{gravity:1; height: 300}**.

To save the data and make it usable later on, your should **put** it into the local storage, defining the key for it: 

{{snippet
Putting current state into the local storage
}}
~~~js
webix.storage.local.put('webix_state', state);
~~~

###setState();

To use the method, you should firstly **get** the stored data from the local storage (using the key you defined for it at the previous step) and then call **setState** from UIManager
to restore the state of the view in focus.

~~~js
var state = webix.storage.local.get('webix_state'); //getting saved values from the local storage
if (state) 
	webix.UIManager.setState(state); // applying them to the component
    
~~~

Saving and getting the state is also available for the treecomponent, where similar methods help memorize opened/closed tree nodes. Learn more about this features in the corresponding 
[Tree documentation](datatree/nodes_manipulations.md#savingthestateofnodes).

{{note
UIManager helps save and restore only the outer view parameters while inner ones like selection and scrolling direction are saved within the [DataState](api__refs__datastate.html) module. 
}}

##Global Tab Navigation 

###Tab/focus Order Logic

Any app on the page is put into layout, even if it isn't declared directly, so as you open the page the whole layout is focused. All the components are children of this layout. When you put cursor into any component or its item 
**tab navigation** can be enabled:

{{snippet
Tab Navigation
}}
~~~js
webix.UIMananger.tabControl = true;
~~~

From now on, you can move through your app with *'tab'* and *'shift+tab'* keys. For instance, if you have two forms in different layout columns, focus will move through all the input fields of the first form,
then move to the other, then will proceed to other components and return to the parent (layout). 

<img src="desktop/focus.png" />

{{sample 80_docs/tab_navigation.html }}

If you want to exclude a single component from tab navigation order, make use of the **tabFocus** property, which is true by default:

~~~
{view:'text' tabFocus: false, ... }
~~~

{{note
Tab navigation within the whole app/page is possible only if all the components are intialized as part of one and the same webix.ui constructor.
}}

What does it mean? 

The 'tab-navigated' components must be children of one and the same layout since by logic focus moves from parent view to children and vice versa.

{{snippet
Tab Navigation between form and toolbar
}}
~~~js
webix.ui({
	rows:[
		{view:"form",..},
    	{view:"toolbar",...}
	]
});
~~~

In case of two separate webix.ui constructors you have two separate objects without the possibility to shift focus from one to the other with the help of a 'tab' key. So move a mouse pointer instead.


{{snippet
Tab navigation won't work!
}}
~~~js
webix.ui({
	view:"form", ..config..
});
        
webix.ui({
	view:"toolbar", ..config..
});
~~~


To get the neighbouring views in focus/tab order, you should apply the following methods to the currently focused view. 

###Methods to Shift Focus

- **getNext();** - gets the next view; 
- **getPrev();** - gets the previous view; 
- **getTop();** - gets the parent view to all the components.

All these methods are called from UIManager and take the necessary view as an argument. 

Let's consider the picture above and see how these methods will work for a text input field (its ID is 'year').

~~~js
var prev = webix.UIManager.getPrev($$("year")); //returns 'title' input field object

var next = webix.UIManager.getNext($$("year")); //returns 'rank' input field object

var top = webix.UIManager.getTop($$("year")); //returns 'layout' object
~~~

@complexity:3