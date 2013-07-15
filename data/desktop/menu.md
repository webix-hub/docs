Menu
=============

###Overview

UI-related pulldown **Menu** inherits from [list](desktop/list.md) and lets users select the necessary item from the list of grouped items (submenus). Each element of a submenu can start its own submenu. <br>
A dynamic **Submenu** becomes visible only when you put a mouse pointer over the corresponding item of the main menu (on 'onMouseOver' event) and hides as soon as you remove mouse pointer ("onMouseOut"). 


<img style="display:block; margin-left:auto;margin-right:auto;" src="desktop/menu.png" />


###Initialization

Menu object is stored in the **data** property. 

~~~js
webix.ui({
		view:"menu",
        id:"my_menu",
		subMenuPos:"right",
        layout:"y",
		data:[ //JSON data
			{ value:"Translate...", submenu:[ 
						"English", "Slavic...", "German"]},
            { $template:"Separator" },
			{ value:"Post...", submenu:[ "Facebook", "Google+", "Twitter" ]}
		],
        type:{ //type object contains setting for component items
              subsign:true
        }           
  });	
~~~

{{sample 03_menu/01_menubar.html }}

####Comments: 

- **subMenuPos** (string) - sets position of pulldown submenus that will appear on mouse over;
- **layout** - sets the arrangement of menu items (**x** for a horizontal menu, **y** for a vertical one)
- **$template:"Separator"** - flag that indicates a separating line between menu elements. Appears once for eaah flag in the place where it is set;
- **subsign** (boolean) - sets an arrow for an item containing a submenu;
- **openAction** (string) - alters the way of submenu opening - **"click"**. If set, you should first click menu item to enable its opening and hiding on "onMouseOver" and "onMouseOut" events.

{{sample 03_menu/11_menu_open_click.html}}

##Working with Menu Items

###Setting Menu Items

Menu items are stored in the **data** array, each item being an object. Submenu items are stored in the **submenu** array. 

A menu/submenu item can be: 

- a **text item**;
- a **text item** that starts its own **submenu**;
- a **Webix component** specified by ID. 

####Text Item

Each menu item has **ID** (though, ID can be omitted) and **value** that defines text of an item. 

~~~js
data:[
	{ id:"1",value:"Post..."},
	{ value:"Info" }
]
~~~

####Text Item with Own Submenu

If a menu items starts a submenu, it's placed is the **submenu** array.

Submenu items can be set as an **array of values**:

~~~js
{ id:"2",value:"Translate...", submenu:[ "English", "Slavic", "German" ]},
~~~

Or, as an **array of menu objects**:

~~~js
{ id: "1.2", value:"Slavic...", submenu:[
			{id: "1.2.1", value:"Belarus"},
			{id: "1.2.2", value:"Russian"},
            {id: "1.2.3", value:"Ukranian"}
           ]
}
~~~

Regardless of the initialization pattern, each submenu iten can start its own submenu:

~~~js
{ id:"1",value:"Translate...", submenu:[
			"English", 
			{ value:"Slavic...", submenu:[
							"Belarus", "Russian", "Ukranian"]},
			"German"
]}
~~~

####Webix Component

<img src="desktop/menu_component.png"/>

~~~js
webix.ui({
	id:"details1",
	view:"context",	width:300, height:200,
	body:{ content:"html1" }
});

webix.ui({
	view:"menu",
	data:[
		{ value:"HTML 4", submenu:"details1" },
		{ value:"HTML 5", submenu:"details2" }
~~~

{{sample 03_menu/02_menubar_template.html}}

###MenuBar

Menu takes after a toolbar in appearance, but you can't embed other controls on a menu toolbar. To do this, init menu and toolbar as neighbouring cols so that they form an integral entity. 

<img src="desktop/menubar.png" />

~~~js
webix.ui({
	cols:[ menu, toolbar ] 
});
~~~

{{sample 03_menu/07_menu_toolbar.html}}

##Hiding and Disabling Menu Items

###Hiding

To hide and show menu item, you should apply **hideItem()** and **showItem()** to the menu component while specifying item ID as function parameter. 

The event that triggers function execution can be **checkbox state change** in the Webix tree populated with the same data as menu, provided that checkbox item ID = related menu item ID. 

~~~js
$$("tree1").attachEvent("onItemCheck",function(id,state){
	if (state) //if checked
		$$("top_menu").hideItem(id);
	else
		$$("top_menu").showItem(id);
});
~~~

As a result, only "unchecked" menu items are shown.

{{sample 03_menu/10_hide_item.html}}

###Disabling

To disable menu item, you should apply special **disableItem()** and **enableItem()** functions to menu passing ID of the necessary item into them. The methods can be triggered by changing state of a 
checkbox which ID equals to the ID of the corresponding menu item. 

~~~js
$$("tree1").attachEvent("onItemCheck",function(id,state){
	if(state) if checked
		$$("top_menu").disableItem(id);
	else
		$$("top_menu").enableItem(id);
});
~~~

In essence, disabling and enabling is performed via **CSS classes**, that's why menu items get a **template** that helps display normal and disabled item differently: 

~~~js
view:"menu", 
template:function(obj){
	if(obj.disabled)
		return "<span class='disabled'>"+obj.value+"</span>";
	return obj.value
}
~~~

{{sample 03_menu/09_disable_item.html}}

##Getting to Menu and Submenu Items

All menu and submenu items can be accessed to work with their values (provided that you know their IDs).

1 . Any item can be accessed directly with **getMenuItem()** method that takes item ID as parameter and returns item object:

~~~js
//getting menu item value by its ID
webix.message("Click: " + $$('menu1').getMenuItem(id).value); 
~~~

{{sample 03_menu/01_menubar.html}}


2 . At the same time, menu items can be derived through submenu object returned by **getSubMenu()** method for an item with the specified ID. If there's no submenu for an item - an object of the calling component will be returned. 

~~~js
var menu = $$("menu1").getSubMenu(id);
webix.message("Click: " +menu.getItem(id).value);
~~~

{{sample 03_menu/02_menubar_template.html}}

Both methods can be attached to either of **menu inner events**, for instance, click events:

- **onItemClick** - standard event that fires on clicking any item including submenu items on any nesting level as well as disabled ones;
- **onMenuItemClick** - fires when clicking only items from **main menu** while ignoring disabled items. 

Both of them take ID of the clicked item as parameter and pass it into the above mentioned functions.

~~~
{
	view:"menu"
	on:{
		onItemClick:function(id){
			webix.message("Click: "+this.getMenuItem(id).value);
		}
	}
}
~~~

###API Reference

[Methods, properties and events](api__refs__ui.menu.html)

###Related Articles

- [Event Handling](desktop/event_handling.md)
- [ContextMenu](desktop/contextmenu.md)
- [Menu CSS Image Map](desktop/menu_css.md)
