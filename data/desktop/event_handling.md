Event Handling
=====================
It is event handlers that make everything move and change. They help attach functions to the objects to change their properties, to make them respond to user actions, 
etc. 

To run any script when the event triggers on a certain page element, you need to attach event handler to this page element by calling an **attachEvent();** for it. 

The syntax is: 

~~~js
 $$("element_id").attachEvent("onSomeEvent", some_function(){...});
~~~

Event names are case-insensitive. 

**Common events** for all ui components are **[mouse events](api/refs/mouseevents.md)** (*onItemClick, onBeforeContxtMenu, onMouseMoving, onMouseOut*, etc) since all the components can be clicked (and right-clicked) 
and respond to a mouse pointer. 

Other inner events depend on the component functionality and are provided in [API reference](api/toc/ui.md) for each component. 

##Attaching Events to Components 

Handler can be attached to the components in different ways:

1 . Using **any inner event** of the component (*check its API ref*): 

- using **attachEvent()** method
- using the component's **on** property;

2 . Using special inner events (*ready, init, mouse events*): 

- using the component's **ready** property;
- via data **scheme**;
- using **specific component properties** that attach some mouse events (*onClick, onContext, onDblClick, onMouseMove*). 

Now let's study each possibility in detail. 

###Using an attachEvent(); method

An **attachEvent()** method takes the name of the component's **inner event** and the function it fires (**handler**) as parameters. 

{{snippet
A button to collapse the whole tree
}}
~~~js
var myEvent = $$("button_id").attachEvent("onItemClick", function(){
$$("dtree").closeAll();
})
~~~

Later on,you can easily detach this event from the component by using the opposite method with an event's name as argument:

~~~js
$$("button_id").detachEvent(my Event);
~~~

###Attaching a function among object literals during component initialization 

You can also define event handlers right in the component constructor:

- **on:** {event hame, function();} - specifies the function that fires when the stated event happens;
- **ready:** function(); - specifies the function that fires when the page is completely parsed; 

~~~js
webix.ui({
    view:"list", 
	$init: function(){...},
    ready:function(){
		this.select(this.getFirstId()); //selects the first item
		this.load("data/books2.xml","xml"); //loads data from XML dataset
	},
    on:{'onItemClick': function(){alert("you have clicked an item");}}
});
~~~

When attaching an event you can specify only the name of a function to attach and later on, provide its description outside the *webix.ui({});* constructor.

~~~js
webix.ui({
    view:"button",
    id:"my_button",
    on:{'onItemClick': select_first}
});

function select_first(){
	$$("datalist").select($$("datalist").getFirstId();)
};
~~~
{{sample 15_datatable/15_api/03_custom_class.html }}

###Attaching events in the data scheme.

[Data scheme](desktop/data_scheme.md) sets initial pattern for loaded data. 

The function specified in its **$init** key will run each time when data is loaded/reloaded to the component and when the [add](api/datastore_add.md) method is called.

~~~js
webix.ui({
	view:"list",
	scheme:{
	 	$init:function(obj){...}
   }
});
~~~

{{sample 05_list/08_xlist.html}}

###Using Specific Properties for Mouse Events

Such properties come in pairs and include: 

- **onClick** and **on_click** - active handlers for clicking;
- **onContext** and **on_context** - active handlers for right-clicking;
- **onDblClick** **on_dblclick** - active handlers for double-clicking;
- **onMouseMove** and **on_mouse_move** - active handlers for setting a mouse pointer over the component (item). 

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
click on the button itself rather than on its cell area, the default behaviour will be overridden with the function attached to the 'delbtn' CSS class.

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

##Setting a Handler

When attaching an event you can specify only the name of a handler and later on, provide its description outside the component constructor.

~~~js
//html button
<input type="button" value="Add &rarr;" onclick='addData()'>

//JS button

function addData(){
	$$("data").add({
		title: document.getElementById("title").value,
	},0)
}
~~~

{{sample 06_dataview/04_manipulations/01_adding.html}}

##Rooting events from one object to another

If you have already attached an event to the component and described the function that this event triggers, you can attach this event to another component in your app. 

For these needs, use the **mapEvent** method and pass a **map** into it, where the map is an event-object correspondence:  

~~~js
button.mapEvent({
    onItemClick:list // where list - some other component
});
~~~

As a result, when the button is clicked, the function that was initially attached only to it, will be executed for list as well. 

Event Mapping helps to get rid of repetitions in code when one and the same event should be attached to different components.

##Event Handling with Component Items

Inner events make it possible to work with component items provided that the **ID** of an item you click, select, etc. is passed to the attached function.

For instance, you need an event that fires each time you click an item in the list and performs an action that manipulates its data. 

~~~js
	$$("mylist").attachEvent("onAfterSelect",function(id){
	   alert(this.item(id).title);
	})
~~~

{{sample 15_datatable/11_sizing/03_resize_win.html}}

##Keyboard Events

Components that are in focus at the moment automatically receive the ability to respond to keyboard actions and can take keyboard events, namely

- **onKeyPress** - to respond to keys specified by dedicated key codes;
- **onEditKeyPress** - the same, but with an editor opened;
- **onTimedKeyPress** - to trigger actions after typing has been finished. 

Look, how the **onTimedKeyPress** event works with a text field to filter data in view [list](desktop/list.md):

~~~js
$$("list_input").attachEvent("onTimedKeyPress",function(){ 
        var value = this.getValue().toLowerCase();
        $$("list").filter(function(obj){
            return obj.title.toLowerCase().indexOf(value)==0;
        })
    });
    //"list_input" id the ID of the dedicated "text" input control
~~~

{{sample 05_list/10_filtering.html }}

Further into about key codes and hot keys is to be found in the [UI Manager](desktop/uimanager.md) article, for it is UI Manager that control focus within the application. 

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

You can also temporarily block all events assosiated with the component by using the **blockEvent()** method. To re-enable event triggering use 
the **unblockEvent()** method. 

~~~js
$$("component_id").blockEvent();

$$("component_id").unblockEvent();
~~~

##Event Handling with HTML nodes. Handling of native DOM events

Alongside with components and their items events can be as well attached to HTML nodes. Here **event();** and **eventRemove()** functions are used: 

~~~js
var eventId = webix.event("divId", "click", function(e){
    do_something();
});

webix.eventRemove(eventId); 
~~~

**Comments:**

- **divID** - the ID of an HTML node you want to attach event to;
- **click** - event name;
- **handler** - function to run (it has **e** argument that points to native event object). 

##Events and Buttons

Event handling oncerns both JS and HTML buttons while the syntax of attaching slightly differs. 

{{snippet
HTML button
}}
~~~js
//html button
<input type='button' class="sample_button" value='Close' onclick='close_tree()'>

//JS button
{ view:"button", id:"sample_button", value:"Close", width:100, click:"close_tree"}
~~~

The custom function **close_tree()** is defined separately.

~~~js
function close_tree(params){....}; 
~~~

##Delayed Events 

The default value for responce on events is 500ms. With such events as **onMouseMove** and **onMouseOut** you can delay the responce on as such milliseconds as you like: 

~~~js
webix.ui({
        view:"menu",
        mouseEventDelay:100,
        ...
});
~~~

@complexity:2