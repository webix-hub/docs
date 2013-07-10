ContextMenu
=================

###Overview

Contextmenu is triggered by right mouseclick. Ui-related Contextmenu inherits from both [window](desktop/window.md) and [list](desktop/list.md). It looks like
ui-related [menu](desktop/menu.md) and shares most of its properties, methods and events. 

<img src="desktop/contextmenu.png" />

{{sample 03_menu/04_context.html }}


###Initialization

1 . ContextMenu - [List](desktop/list.md)

~~~js
webix.ui({
	view:"contextmenu",
    id:"my_menu",
	data:["Add","Rename","Delete",{ $template:"Separator" },"Info"],
	master:"areaA" //  ID of a DIV container
		});
~~~

**Data** property includes list items in the window, **separator** stands for a line to divide window areas while **master** property defines the area where 
the component is initialized. 

2 . ContextMenu - [Menu](desktop/menu.md)

~~~js
			webix.ui({
				view:"contextmenu",
                id:"my_menu",
				data:[
					{ value:"Translate...", submenu:[ 
						"English", "Slavic...", "German"
					]},
					{ ...},
					{ ... }
				]
				master:"areaB"
			});
~~~

Here **data** includes menu constructor with some items having submenus. 

{{sample 03_menu/04_context.html }}

###Working with ContextMenu

####Getting an Item's Value

You can access any element of a contextmenu and its submenus and attach events to them with the help of the following patterns:
~~~js

//for list contextmenu
$$("my_menu").attachEvent("onItemClick":function(id){
	webix.message(this.getItem(id).value);
                        
//for "menu-like" contextmenu                        
$$("my_menu").attachEvent("onItemClick", function(id){
	var menu = this.getSubMenu(id);
	webix.message("Click: "+menu.getItem(id).value);
    })
			
~~~

####Linking a Contextmenu with a Component

A contextmenu can be initialized for any lib component. A three-step process includes the following stages: 

Firstly, you should include  an **onContext** property into the component's construction:

~~~js
webix.ui({
     view:"list",
     //list config
	 onContext:{} // the empty object
    });
~~~

Secondly, you initialize a contextmenu in a separate within a separate **webix.ui** function: 

~~~js
webix.ui({
	view:"contextmenu",
    data:[....],
    ... 
});
~~~

Thirdly, you link the contextmenu to the necessary component with the help of an **attachTo()** function:

~~~js
$$('contextmenu1').attachTo($$('list1'));
~~~

<img src="desktop/contextmenu_list.png" />

{{sample 03_menu/06_context_for_list.html}}

####Getting Properties of the Master Component

Like with [context](desktop/context.md), the area upon which the context menu is called master area or (if you call it over a component or its item), **master component**. 

Master component object is retrieved with the **getContext()** property. 

~~~js
webix.ui({
	view:"contextmenu"
	on:{
         onItemClick:function(id){
			var context = this.getContext();
    		var list = context.obj; //list item objetc
    		var listId = context.id; //id of teh clicked list item
                
    		webix.message("List item: <i>"+list.getItem(listId).title+"</i> <br/> 
    					Context menu item: <i>"+this.getItem(id).value+"</i>");
~~~

{{sample 03_menu/06_context_for_list.html}}

###API Reference

[Methods, properties and events](api__refs__ui.contextmenu.html)

###Related Articles

- [List](desktop/list.md)
- [Menu](desktop/menu.md)
- [Event Handling](desktop/event_handling.md)
- [Context](desktop/context.md)