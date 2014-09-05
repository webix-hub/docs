Datatable Header Menu
==========================

{{note
The functionality is available in **Webix Pro** edition only. 
}}

<img src="datatable/headermenu.png"/>

Datatable **built-in header menu** is used to control column visibility with the help of a dedicated **popup list** with column names. 

By default it is enabled by a **right click** over any column header while clicks on menu items change the state of the corresponding columns. 

##Simple Configuration

The simplest header menu is set with the help of a datatable **headermenu** property and has the following features: 

- it is triggered by a right click over the header of **any** column;
- each menu item stands for a column;
- hidden columns are included into the menu without an "eye" (visible) icon;
- height of the menu is adjusted to the number of menu items;
- width of the menu is 150px. 

~~~js
{ view:"datatable", columns:[...], headermenu:true}
~~~

{{sample 60_pro/01_datatable/03_header_menu.html}}

##Extended Configuration

Headermenu can be presented as a JSON object with configuration options for the menu list. The options duplicate [Webix list properties](api/refs/ui.list.md) and may include: 

- **width** (number) - width of the popup in pixels;
- **height** (number) - height of the popup in pixels;
- **autoheight** (boolean) - if *true*, adjusts popup height to the number of menu items. *True* by default;
- **yCount** (number) - the number of menu items to show;
- **scroll** (boolean) - if *true*, enables the scrollbar. *False* by default;
- **data** (object) - columns to show in the menu (if not set, all columns are reflected in the menu). Each item contains: 
	- **id** - ID of the datatable column (the same one it has in the *columns* configuration);
    - **value** - title of the datatable column (its header, as a rule). 
- **template** (string) - [template](desktop/html_templates.md) of menu items (if you need to show a property other than *value* in the list).

**Scrollable header menu with extra width**

~~~js
view:"datatable",
columns:[...],
headermenu:{
	width:250,
	autoheight:false,
	scroll:true
}
~~~

{{sample 60_pro/01_datatable/04_header_menu_extended.html}} 

**Header menu with limited item quantity**

~~~js
view:"datatable", 
columns:[...],
headermenu:{
	data:[
		{ id:"year", value:"Released"},
		{ id:"rating", value:"Rating"}
	]
}
~~~

{{sample 60_pro/01_datatable/04_header_menu_extended.html}} 

**Excluding a column from the menu**

To exclude any column from the header menu, one should define a *headermenu* property for it and  set its value to *false*: 

~~~js
{ 
	view:"datatable", 
    headermenu:true, //enables the header menu
    columns:[
    	//excluding "id" column from the menu	
    	{id:"id", header:"#", headermenu:false},
        {id:"title", header:"Title"}, ...
    ]
}
~~~


##Attaching Headermenu to Other Elements

###Extra "headermenu" column

Header menu can as well be shown by a **left mouse click** over the special datatable column that features a "headerMenu" **content**. 

<img src="datatable/headermenu_icon.png"/>

~~~js
view:"datatable",
columns:[
	{ header:{ content:"headerMenu" }, headermenu:false, width:35 }
]
~~~

{{sample 60_pro/01_datatable/05_header_menu_icon.html}}

If there is such a column in the datatable configuration, the **headermenu** property for it can be omitted. 

**Content** property of a header line is also used to set [built-in filters](datatable/filtering.md#filtertypes) and 
[define column groups](datatable/columns_configuration.html#groupingcolumns). 

###Showing header menu on demand 

The headermenu unique ID can be accessed through datatable **config** object. If you know this ID, you can work with the headermenu like with any other popup window, 
e.g. [show](api/link/ui.popup_show.md) it when needed. 

~~~js
webix.ui({
	view:"datatable", id:"dt2", columns:[...], headermenu:true
});

//show the headermenu by API
function showMenu(node){
	var menu = $$("dt2").config.headermenu;
	$$(menu).show(node);
}
~~~

{{sample 60_pro/01_datatable/05_header_menu_icon.html}}






