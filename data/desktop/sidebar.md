Sidebar
==========

External resources
-------------------

- This component isn't included into the library package and should be taken from [https://github.com/webix-hub/components](https://github.com/webix-hub/components)
- There is an online sample at [docs.webix.com/samples](http://docs.webix.com/samples/28_sidemenu/01_sidebar.html)

Overview
----------

Webix Sidebar is a datatree/index.md-based component which is used for creating menus with hierarchical structure. 

{{note
JS files for Sidebar menu isn't included into Webix lib package and should be taken from 
[https://github.com/webix-hub/components](https://github.com/webix-hub/components).
}}

Sidebar menu can be collapsed into a navigation bar with only icons of the menu items visible. On hovering an icon, a popup with the related item is shown with its sub-items.

On clicking a Sidebar menu item, either the related content is shown in the right part of the screen or selectable sub-items are displayed.

<br>

<img style="display:block; margin-left:auto;margin-right:auto;" src="desktop/sidebar_front.png"/>

<br>


Creating a Sidebar Menu
-------------------------

###Files to include

You need to include the following files on your page:

~~~html
<!-- js files -->
<script src="codebase/webix.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="//cdn.webix.com/components/sidebar/sidebar.js"></script>

<!-- css files -->
<link rel="stylesheet" href="codebase/webix.css" type="text/css" charset="utf-8">
<link 
	rel="stylesheet" 
	type="text/css" 
	href="//cdn.webix.com/components/sidebar/sidebar.css"
>
~~~

###Initialization

To initialize the Sidebar and load it with data, you need to use the code as in:

~~~js
// webix.ready() function ensures that the code will be executed when the page is loaded
webix.ready(function(){
	// object constructor
	webix.ui({
		view: "sidebar",
        // setting the data source
		data: menu_data
    });
});
~~~

###Data source

Sidebar can load data from various sources in different formats. You can find more information in the datatree/loading_data.md article.

The Sidebar data configuration contains the description of menu items, corresponding icons and sub-items. It can look like this:

~~~js
var menu_data = [
	{id: "dashboard", icon: "dashboard", value: "Dashboards",  data:[
		{ id: "dashboard1", value: "Dashboard 1"},
		{ id: "dashboard2", value: "Dashboard 2"}
	]},
	{id: "layouts", icon: "columns", value:"Layouts", data:[
		{ id: "accordions", value: "Accordions"},
		{ id: "portlets", value: "Portlets"}
	]},
	{id: "tables", icon: "table", value:"Data Tables", data:[
		{ id: "tables1", value: "Datatable"},
		{ id: "tables2", value: "TreeTable"},
		{ id: "tables3", value: "Pivot"}
	]},
    ...
];
~~~

{{sample
28_sidemenu/01_sidebar.html
}}


How to add the Menu button
---------------------

Adding the Menu button in the left top corner allows collapsing the menu items into a vertical navigation bar with icons. 
In this state menu items will be shown by hovering the mouse pointer over the icons.

Let's create a layout with a toolbar and two columns. We'll place a button on the toolbar and put a sidebar in the left column, the right column will serve as a template for some content that
could be shown on an item's click.



~~~js
webix.ui({
	rows: [
		{ view: "toolbar", elements: [
			{	view: "button", 
            	type: "icon", 
                icon: "bars",
				width: 37, 
                align: "left", 
                css: "app_button", 
                click: function(){
					$$("$sidebar1").toggle()
				}
			},
		]},
		{
        	cols:[
				{
					view: "sidebar",
					data: menu_data			
				},
                {
					template: ""
				}
			]
		}
	]
});
~~~

The applied button uses the "bars" icon from the Font Awesome collection. You can set its position using the *align* property and specifying a CSS style, like this one:

~~~css
.app_button button{
	padding:0;
	text-align: center;
}
~~~

To collapse/expand the menu on the button click, we define the click handler in which we put the *toggle()* function. The details are given in the [API reference](desktop/sidebar.md#toggle).

The image below shows how an expanded Sidebar menu collapses on the Menu button click:

<img src="desktop/sidebar_collapsed.png">


Data Visualization
---------------

Sidebar allows configuring the templates of its items. The desktop/html_templates.md are described in the desktop/type.md of Sidebar:

~~~js
webix.type(webix.ui.tree, {
	name:"sideBar",
	height: "auto"
    ...
});
~~~


###name

defines the Sidebar name

~~~js
{
	name:"sideBar"
}
~~~

###height

specifies the height of an item in the Sidebar

~~~js
{
	height: "auto"
}
~~~

###css

specifies the CSS class applied to the Sidebar

~~~js
{
	css: "webix_sidebar"
}
~~~


###template

defines the appearance of the Sidebar in the collapsed and expanded states

~~~js
template: function(obj, common){
	if(common.collapsed)
		return common.icon(obj, common);
	return common.arrow(obj, common)+common.icon(obj, common) +"<span>"+obj.value+"</span>";
}
~~~

###arrow

defines the presentation of arrows, depending on the level of the related Sidebar items

~~~js
arrow: function(obj, common){
	var html = "";
	var open = "";
	for (var i=1; i<=obj.$level; i++){
		if (i==obj.$level && obj.$count){
			var icon = " fa-angle-"+(obj.open?"down":"left");
			html+="<span class='webix_sidebar_dir_icon webix_icon"+icon+"'></span>";
		}
	}
	return html;
},
~~~

###icon

specifies a template for rendering Font Awesome icons next to the items of Sidebar 

~~~js
icon:function(obj, common){
	if(obj.icon)
		return "<span class='webix_icon webix_sidebar_icon fa-"+obj.icon+"'></span>";
	return "";
}
~~~


API Reference
--------------

Sidebar inherits the most part of API from the Tree component. Follow the api/refs/ui.tree.md API page to find the necessary method,event or property.

Besides, Sidebar has its own methods and properties. You can find them in the list below:

###Methods

####getPopup() 

returns the popup's object

~~~js
sidebar.getPopup();
~~~

returns:

- {object} the popup's object

####getPopupTitle()

returns a Template view with a popup title (a branch's name)

~~~js
sidebar.getPopupTitle();
~~~

returns:

- {object} a Template view containing the popup title

####getPopupList() 

returns a List view of the Popup of SideBar

~~~js
sidebar.getPopupList();
~~~

returns:

- {object} a List view containing child items


####collapse()

collapses the sidebar into a navigation bar

~~~js
sidebar.collapse();
~~~

####expand()

expands the sidebar from the collapsed state

~~~js
sidebar.expand();
~~~

<h4 id="toggle">toggle()</h4>

collapses an expanded Sidebar and expands a collapsed Sidebar 

~~~js
sidebar.toggle();
~~~

###Properties


####collapsed

defines if the Sidebar will be shown in the collapsed state or in the expanded one

- value	- {boolean}	true for collapsed state, false for the expanded one

~~~js
webix.ui({
	view: "sidebar",
    collapsed:true   
});
~~~


####position

sets the position of SideBar

Parameters:

- value - {string} a new position of SideBar ("right" or "left")

~~~js
webix.ui({
	view: "sidebar",
    position:"right"   
});
~~~


