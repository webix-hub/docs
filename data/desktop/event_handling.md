Event Handling
=====================

Events that occur on the page with a Webix-based application fall into three groups: 

- inner events of Webix components ("onAfterSelect", "onChange", "onItemClick", etc);
- [global Webix events](#globalwebixevents) connected with its application flow;
- native DOM events (can be handled in [Webix way](#handlingofnativedomevents) as well).

The main part of the article below concerns inner events of Webix components, while the details of the other two groups can be checked by a link. 


##Attaching Handlers to Inner Component Events

**Common inner events** for all ui components are **[mouse events](api/refs/mouseevents.md)** (*onItemClick, onBeforeContextMenu, onMouseMoving, onMouseOut*, etc) since all the components can be 
clicked (and right-clicked) and respond to a mouse pointer. 

Other inner events depend on the component functionality and are provided in [API reference](api/toc/ui.md) for each component. 

A handler can be attached to a component in different ways:

1 . The most common way is to use **any event** of the component (*check its API reference*) within: 

- **attachEvent()** method, or;
- the component's **on** property.

2 . Depending on the component nature, you can attach a handler to some specific events defined by component properties: 

- **ready** property of data components;
- **click** property of buttons and inputs;
- the component's data **scheme** object for events connected with data loading;
- some **specific properties** that point to mouse events (*onClick, onContext, onDblClick, onMouseMove*). 

Now let's study each possibility in detail. 


###Using the attachEvent() method

An **attachEvent()** method takes the name of the component's **inner event** and the function it fires (**handler**) as parameters. The syntax is: 

~~~js
 $$("element_id").attachEvent("onSomeEvent", some_function(){...});
~~~

Event names are case-insensitive. 

{{snippet
A button to collapse the all tree nodes
}}
~~~js
var myEvent = $$("button_id").attachEvent("onItemClick", function(){
	$$("dtree").closeAll();
});
~~~

Later on, you can easily detach this event from the component with the help of the opposite method:

~~~js
$$("button_id").detachEvent(my Event);
~~~

###Attaching a function in the component constructor

You can also define event handlers right in the component constructor within either of the following attributes:

- **on** - specifies the function that fires when the stated event happens;
- **ready**  - specifies the function that fires when the component is ready to use (has been initialized and loaded data, if any);
- **click** - specifies the function that fires when the component is clicked. Works for some [form controls](desktop/controls.md) like simple buttons and inputs. 

~~~js
webix.ui({
    view:"list", 
	$init: function(){...},
    ready:function(){
		this.select(this.getFirstId()); //selects the first item
		this.load("data/books2.xml","xml"); //loads data from XML dataset
	},
    on:{
    	'onItemClick': function(){
        	alert("you have clicked an item");
        },
        'onAfterLoad':function(){ ... }
    }
});
~~~

When attaching an event you can specify only the name of a function to attach and declare it outside the *webix.ui()* constructor:

~~~js
function select_first(){
	$$("datalist").select($$("datalist").getFirstId();)
};

webix.ui({
    view:"button",
    on:{ 
    	'onItemClick': select_first
   	}
});


~~~
{{sample 15_datatable/15_api/03_custom_class.html }}

For buttons you can make it more compact by using **click** attribute:

~~~js
function close_tree(){...}; 

{ view:"button", id:"sample_button", value:"Close", width:100, click:"close_tree"}
~~~

###Attaching DataStore and TreeStore events

While data components inherit methods from DataStore and TreeStore, events aren't inherited. 
That's why they should be attached through the *data* object:

~~~js
view.data.attachEvent("onParse", function(driver, data){
   // some code
});
~~~

There are also two alternative ways of attaching such events:

- using the "data->" prefix in the handler:

~~~js
datatable.attachEvent("data->onParse", function(driver, data){
    // some code 
});
~~~

- using the "data->" prefix within the component's *on* property:

~~~js
view:"datatable",
on:{
   "data->onParse", function(){
      // some code
   }
}
~~~



###Attaching events in the data scheme.

**Data scheme** allows changing the default pattern of data handling within the component. 

For instance, the function specified in its **$init** key will run each time when data is loaded/reloaded to the component and when the [add](api/datastore_add.md) method is called.

~~~js
webix.ui({
	view:"list",
	scheme:{
	 	$init:function(obj){...},
        $update:function(obj){...}
   }
});
~~~

{{sample 05_list/08_xlist.html}}

More possibilities of the data scheme are described [separately](desktop/data_scheme.md)).

###Using specific properties for mouse events

Such properties come in pairs and include: 

- **onClick** and **on_click**  handlers for clicking;
- **onContext** and **on_context**  handlers for right-clicking;
- **onDblClick** **on_dblclick** handlers for double-clicking;
- **onMouseMove** and **on_mouse_move** handlers for setting a mouse pointer over the component (item). 

For instance, you need an event that fires each time you click an item in the list and performs an action that depends on the data derived from this item. 

~~~js
	$$("mylist").attachEvent("onAfterSelect",function(id){
	   alert(this.getItem(id).title);
	})
~~~

- those included into the component by default  (when select property is true, clicking means selection) and 
- those attached with the help of an "onItemClick" event. 

Both on_click and onClick can be modified if needed. 

1 . With **on_click** redefining can be done only **after** the component initialization.
 
The *on_click* 

~~~js
grid = new webix.ui({
	view:"datatable",
	columns:[
		{ id:"", template:"<input  type='button' class='delbtn' value='Delete'>"},
        {id:"title", ...}
        ],
    on:{"onItemClick", function(){...} //default click behavior
    },
    select:true
});

grid.on_click.delbtn=function(e, id, trg){
	webix.message("Delete row: "+id);
	return false;//blocks default onclick event
};
~~~

{{sample 15_datatable/14_events/02_click_css.html}}

One of the columns features an HTML template with a button styled with *'delbtn'* CSS class. All  cells including the one with this button will react on default click behavior while when you 
click on the button itself rather than on its cell area, the default behavior will be overridden with the function attached to the 'delbtn' CSS class.

2 . The **onClick** allows redefining current click behavior right in the component constructor.

~~~js
webix.ui({
	view:"list", 
	template:"#votes# <span class='info'>Details</span>",
	select:"multiselect",
	onClick:{
		info:function(e, id){
			webix.message(this.item(id).title);
			return false; /blocks default onclick event
		}
	},
});
~~~

When you click list item styled with **info** CSS class, the item won't be selected and custom message will appear. 

{{sample 05_list/14_custom_handlers.html}}

The same pattern is true for other pairs of properties. 

##Routing Events from One Component to Another

Event Mapping helps to get rid of repetitions in code when one and the same event should be attached to different components.
If you have already attached an event to the component and described the function that this event triggers, you can route this event to another component in your app. 

For these needs, use the **mapEvent** method and pass a **map** into it, where the map is an event-object correspondence:  

~~~js
webix.ui({
	rows:[
		{ view:"list", id:"list1", data:list_data, on:{
			onItemClick:getItemValue
		}},
		{ view:"list", id:"list2", data:list_data}
	]
});
//here event name should be in the lower case
$$("list2").mapEvent({onitemclick:$$("list1")});
~~~


As a result, when the second list is clicked, the function that was initially attached only to the first one, will be executed for it as well: 

~~~js
function getItemValue(id){
	var obj = this.$eventSource || this;
    var value = obj.getItem(id).value;
	webix.message("List: "+obj.config.id+", clicked: "+id);
			
}
~~~

Note that if you need to access the object for which the handler is called at the moment, you can do it via **$eventSource** property while **this** will always point to the object for which the handler
is attached initially.

##Event Handling with Component Items

Inner events make it possible to work with component items provided that the **ID** of an item you click, select, etc. is passed to the attached function.

For instance, you need an event that fires each time you click an item in the list and performs an action that manipulates its data. 

~~~js
$$("mylist").attachEvent("onAfterSelect",function(id){
	 alert(this.item(id).title);
});
~~~

{{sample 15_datatable/11_sizing/03_resize_win.html}}

##Blockable Events

Events can be divided into two groups:

- events that don't affect the app's work by their result;
- events that affect the app's work depending with their result. If an event title contains the word "before", the continuation of the current action 
depends on whether the function returns *true* or *false*. 

{{snippet
The function returns false, selection is blocked
}}
~~~
$$("my_list").attachEvent("onBeforeSelect", function(){ return false; })
~~~

You can also temporarily block all events associated with the component by using the **blockEvent()** method. To re-enable event triggering use 
the **unblockEvent()** method. 

~~~js
$$("component_id").blockEvent();

$$("component_id").unblockEvent();
~~~

##Delayed Events 

The default value for response to events is 500 ms. With such events as **onMouseMove** and **onMouseOut**, you can delay the server response for as much time (in milliseconds) as you need:

~~~js
webix.ui({
   view:"menu",
   mouseEventDelay:100,
   ...
});
~~~

##Keyboard Events

Components that are in focus at the moment automatically receive the ability to respond to keyboard actions and can take keyboard events, namely

- **onKeyPress** - to respond to keys specified by dedicated key codes;
- **onEditKeyPress** - the same, but with an editor opened;
- **onTimedKeyPress** - to trigger actions after typing has been finished. 

Look how the **onTimedKeyPress** event works with a text field to filter data in view [list](desktop/list.md):

~~~js
$$("list_input").attachEvent("onTimedKeyPress",function(){ 
    var value = this.getValue().toLowerCase();
    $$("list").filter(function(obj){
        return obj.title.toLowerCase().indexOf(value)==0;
    });
});
//"list_input" id the ID of the dedicated "text" input control
~~~

{{sample 05_list/10_filtering.html }}

More information about key codes and hot keys is to be found in the [UI Manager](desktop/uimanager.md) article. 

##Global Webix Events

Webix global events are not connected with any specific component and can be used to control general application issues (clicks, touch movements, server-side requests, etc). 
Some of them repeat native DOM events.

###Events connected with Webix components functionality

- **onDataTable**(config, obj) - fires the moment before a Webix [datatable](datatable/index.md) is rendered on the page;
- **onEditEnd** - fires when a **popup data editor** (date, color, richselect) is closed in any of the components on the page. See desktop/editing.md article for details;
- **onLiveValidation**(editor, result, obj, value) - fires when editing starts in the component with [live validation](api/ui.datatable_livevalidation_config.md) enabled;
- **onSyncUnknown**(obj, source, filter) - fires when a component tries to [sync](desktop/nonui_objects.md) its data with a non-Webix collection;
- **onReconstruct**(obj) - fires when application layout is reconstructed (view is removed, added, replaced). See desktop/dynamic_layout.md article for details;
- **onLayoutResize**(cells) - fires when application layout is [resized](desktop/resizing.md) (not window). 

###General page events

- **onClick**(e) - fires when a click/double click happens in any application part; 
- **onFocusChange**(newf, oldf) -fires when focus is changed in the application. Its parameters are Webix objects, the one in focus and the one previously focused, or null if non-Webix object is focused; 
- **onReady** - fires at the same time with window onload event;
- **unload** - fires at the same time with window onunload event. 

###Page events in touch environment

- **onRotate**(orientation) - fires when screen is rotated;
- **onAfterScroll**(pos) - fires when some webix view has been scrolled; 
- **onTouchStart**(context) - fires on touch start;
- **onLongTouch**(context) - fires on long touch;
- **onTouchEnd**(start_context, current_context) - fires on touch end;
- **onTouchMove**(start_context, current_context) - fires on touch movement;
- **onSwipeX**(start_context, current_context) - fires when a horizontal swipe is detected;
- **onSwipeY**(start_context, current_context) -fires when a vertical swipe is detected.

The details on Touch Events are given in [the related part of API reference](api/refs/ui.view_events.md)

###Events connected with server-side requests from the page

- **onBeforeAjax**(mode, url, data, request, headers, files, promise) - fires  when any Ajax request is issued. It can be developer request or automatic (when using [Data Connectors](desktop/dataconnector.md));
- **onAjaxError**(request_obj) - fires when any Ajax request results in an error;
- **onLoadError**(text, xml, xhttp, obj) - fires when an error has happened during [loading the data](desktop/data_loading.md) into a component. See desktop/loadingerror.md article for details.

All such events are attached to **webix** object:

~~~js
webix.attachEvent("onRotate", function(mode){
	..// logic
});
~~~

##Handling of Native DOM Events

Native DOM events can be handled with the help of Webix [event()](api/_event.md) and [eventRemove()](api/_eventremove.md) functions that are called from **webix** object:

~~~js
var eventId = webix.event("divId", "click", function(e){
    do_something();
});

webix.eventRemove(eventId); 
~~~

**Comments:**

- **divID** - the ID of an HTML node you want to attach event to;
- **click** - event name (note that they are used here without *on* prefix);
- **handler** - function to run (its **e** argument points to native event object);
- **context** - (optional) additional settings: 
	- **bind** - (object) an object that the <i>this</i> keyword refers to;
	- **capture** - (boolean) a flag that indicates on which stage (capture or bubble) event should be captured. *false* by default;
	- **id** - (string) event handler ID (if not set, will be generated automatically).

@complexity:2
