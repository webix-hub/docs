Window
=================

###Overview
Window is a ui-related component that looks like a standard on-screen window. It inherits from [view](desktop/view.md) but differs from other components in its character. It 
lies not within your app's layout but as if above other components. The same is true about [popup](desktop/popup.md). 

<img src="desktop/window.png"/>

###Initialization

~~~
webix.ui({
	view:"window",
	id:"my_win",
	head:"My Window",
	body:{
		template:"Some text"
	}
})
~~~

{{sample 10_window/01_init.html }}

####Comments: 

- standard window contains **head** and **body** sections. However, head can be omitted if you don't need it. 
- To make window visible, you should apply **show()** method after its initialization;
- A movable window contains **move:true** property in its constructor;

####Head

Head differs from window body in style and may contain:
	
- a text header that is set as string value of head property;
- a toolbar with controls. The most common are text **[label](desktop/controls.md#label)** and **"Close" [button](desktop/controls.md#button)**. 

~~~js
{view:"button", label:"Close", width:70, click:("$$('my_win').close();")} 
		// "my_win" is your window's ID   
~~~

Please note that there exist two functions to remove a window from the screen - **close()** and **hide().** The first one completely removes the window from the app and there will be no way to show it back. 

If you want to change the window's visibility rather than remove it, use **hide().** Later on, it can appear on the page on calling **show()** method for it. 

####Body

This section may contain any view to match your needs. 

Text template is set by initing **[template](desktop/template.md)** component. It can be defined without direct initialization: {template:"some text"}.

{{snippet
Window with Datatable
}}
~~~js
webix.ui({
	view:"window",
	body:{
		view:"datatable",
        ...
	}
})
~~~

{{sample 10_window/06_component_inside.html }}

###Window Sizing and Positioning

The must-have parameters for the window are **width** and **height** since otherwise it will occupy the whole screen. Furthemore, you should specify 
**left** and **top** offset as by default it will be placed in the top left corner of the screen sticked to browser borders. 

~~~js
{
	view:"window"
    width:300,
	height:200,
	top:100, 
	left:100
}
~~~

Window position can be set within the **show();** method as well: 

~~~js
webix.ui({
	view:"window",
    ...
}). show({
	clientX:300, //left offset from the right side
	clientY:50 //top offset
});
~~~

{{sample 98_docs/Window_offset.html }}

To get rid of absolute positioning, you can just place your window in the **center** of the page, which ensures that it will take an adequate position on any screen regardless of its size. 

~~~js
webix.ui({
	view:"window",
    position:"center"
    //..window config

})
~~~

{{sample 10_window/07_center.html }}

To set the new position for a window, use the following method: 

~~~js
$$('my_window').setPosition(100, 100); //left and top offset
~~~

###Window Modality

Modality is a feature of the ui-component that can affect the work of the application and control user-app interaction. [Alert and Confirm message boxes](desktop/message_boxes.md) are modal windows in their essence, as
they **prevent the workflow** on the application main window. 

The appearance of such window on the page prevent users to work with the app until they perform action required by this window (enter data, press the button, etc.. ). 

UI-related Window is non-modal by default. Its modality is set with the help of the same-name property:

~~~js
{view:"window", modal:true}
~~~

When a modal window is inited, the app area is greyed out to indicate that it is disabled while you "communicate" with the window.

###API Reference

[Methods, properties and events](api__refs__ui.window.html)

###Related articles

- [Popup](desktop/popup.md)
- [Message Boxes](desktop/message_boxes.md)
- [Changing Visibility of Components](desktop/visibility.md)
- [Window CSS Image Map](desktop/window_css.md)