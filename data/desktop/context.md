Context
===============

##API Reference

- [Methods, properties and events](api__refs__ui.context.html)
- [Samples](http://docs.webix.com/samples/03_menu/index.html)



##Overview

Ui-related context points to an element that will be shown on the page on right mouse click. The context look like a [popup window](desktop/popup.md) where you can place any HTML element or UI component. 

##Initialization

~~~js
webix.ui({
		view:"context",
        width: 300,
		body:{ ....},
        padding:20,
		master:"areaA"
			});
~~~
{{sample 03_menu/07_context_ui.html }}

####Comments:

- **master** - the ID of an HTML container that will be shown on page loading. It is the area where the right mouse click will make context elements visible. This element is included into the *body* property;
- **body** - an element (ui component) that appears on right mouse click;
- **width** - width of UI component that apears on right mouse click;
- **padding** - offset from context border and its inner contents.

Context features **hidden** property set to *true* by default. It can be changed during component init, but this won't make much sets since context purpose is to be hidden and appear only on right click. 

##Working with Context

What can be a context element? 

- **Any ui-related component**. For instance a two-button toolbar: 

<img src="desktop/context_ui.png">

~~~js
webix.ui({
	view:"context",
	body:{view: "toolbar", cols:[
			{view:"button", value:"Button1", width: 100},
			{view:"button", value:"Button2", width: 100}]
	}, 
	width: 300, 
	master:"context_area"
});
~~~
{{sample 03_menu/07_context_ui.html }}

- **Any HTML element** referred to by the ID of the div containter it is placed in. 

<img src="desktop/context_div.png"/>


The container is specified in the body constructor as value of **content** property. 

~~~js
body:{ 
	content:"details"
}
~~~

Content will get elements that are inside the container. 

~~~html
<div id="details">
	Power of HTML5 
	<hr>
	<img src='http://Webix.com/codebase/images/bg_touch.gif'>
</div>
~~~

{{sample 03_menu/05_context_content.html}}


##Related Articles

- [Contextmenu](desktop/contextmenu.md)
- [Popup](desktop/popup.md)
