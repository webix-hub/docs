attachTo
=============

@short: attaches a context menu to webix component 
	

@params:
- view		object		**ID** of the webix view

@example:
webix.ui({
	view:"list",
    ..//list config
});

webix.ui({
	view:"contextmenu",
    ..//contextmenu config
});

$$("contextmenu1").attachTo($$("list1"));

@template:	api_method

@related: 
	desktop/contextmenu.md
@relatedsample:
	03_menu/06_context_for_list.html
@relatedapi:
	api/contexthelper_getcontext.md	

@descr:
The component and context object are initialized in **different webix constructors** (as seen above). 
Contextmenu isn't shown initally and becomes seen on right mouseclick with cursor pointed over the list area. 

