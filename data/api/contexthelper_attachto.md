attachTo
=============

@short: attaches a context menu to a Webix component
	

@params:
- view		object		**ID** of the Webix view

@example:
webix.ui({
	view: "list",
  ...  // list config
});

webix.ui({
	view: "contextmenu",
  ...  // contextmenu config
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
The component and context object are initialized in **different Webix constructors** (as seen above).
The context menu isn't shown initially and becomes visible on right mouse click with the cursor pointed over the list area.
