getContext
=============

@short: gets the master area for contextmenu
	
@returns:
view	object	 webix component or HTML object

@example:

$$("contextmenu1").attachTo($$("list1")); //menu is initialized for list

var context = this.getContext(); //gets master area (where list item is)
var list = context.obj; //gets list item object
var listId = context.id; //gets the it of the right-clicked list item

@template:	api_method
@related:
	desktop/context.md
    desktop/contextmenu.md
@relatedsample:
	03_menu/06_context_for_list.html
@relatedapi:
	api/contexthelper_attachto.md
@descr:


