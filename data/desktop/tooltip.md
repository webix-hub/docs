Tooltip Implementation
=================

Tooltip stands out of the fixed pattern. It lies above other ui-related components, which makes it similar to  [window](desktop/window.md) and 
[popup](desktop/popup.md). 

Tooltip is connected with some component or its item and becomes visible when you place a mouse pointer over it and disappears when it leaves the area. Doesn't it 
resemble onMouseOver/onMouseOut events? Still, event handling is quite the [other story](desktop/event_handling.md). 

<img src="desktop/tooltip.png"/>

Here, you don't need any specific code to make it work. You should just include a tooltip into the necessary component abd specify the info to be shown inside a tooltip area. 

Tooltip may include text as well as items from the dataset. 

~~~js
webix.ui({
	view:"dataview",
	...
    tooltip:{
		template:"<span class='webix_strong'>Rating: </span> #rating#<br/>
        <span class='webix_strong'>Votes: </span> #votes#"
	}
});
~~~

{{sample 06_dataview/02_templates/06_tooltip.html }}

By default, tooltip is placed on the same level with the mouse pointer, 20 px to the right from it. 

To change this pattern, specify the coordinates relative to the mouse pointer as values of **dx** and **dy** properties. 

~~~js
tooltip:{
	template:"<span class='webix_strong'>Rating: </span> #rating#<br/>
    <span class='webix_strong'>Votes: </span> #votes#",
	dx: 10, //20 by default
	dy:5    // 0 by default
}
~~~

@complexity:2