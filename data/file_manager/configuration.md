File Manager Structure
==========================

File Manager Layout
---------------------

File Manager consists of several Webix views. 

The main layout includes two rows: a row with a toolbar and the second row with a sublayout that contains Tree and mode views. 
Thus, the structure of File Manager is:

- <a href="#toolbar">Toolbar</a>:
	- <a href="#menubutton">Menu button</a> 
	- <a href="#spacer">Spacer</a> 
	- <a href="#backforward">Back and Forward</a> group of buttons
	- <a href="#levelup">LevelUp button</a> 
	- <a href="#path">Path view</a> 
	- <a href="#search">Search control</a> 
	- <a href="#modes">Modes button</a> 
- <a href="#body">bodyLayout</a> with 3 columns:
	- <a href="#tree">Tree</a> 
	- <a href="#resizer">Resizer view</a> 
	- <a href="#filesandtable">'Files' and 'Table'</a> view modes

The layout of File Manager is rather flexible. It means that you can customize it according to your preferences.

For example, if you want to swap one toolbar element with another one or even to remove it, the functionality of File Manager will remain untouched.

You can find more information concerning the possibilities of customizing File Manager views in the article file_manager/howto.md.


<h3 id="toolbar">Toolbar</h3>

<img src="file_manager/toolbar.png"/>

Toolbar is based on Webix desktop/toolbar.md view.

~~~js
{
    id: 		"toolbar",
	css: 		"webix_fmanager_toolbar",
    paddingX: 	10,
	paddingY:	5,
	margin: 	7,
	cols:[
       // buttons 
    ]
}
~~~

You can use the **$$("toolbar")** method to refer to its object:

~~~js
var toolbar = $$("fmanager").$$("toolbar");
~~~


<h4 id="menubutton">Menu button</h4>

<img src="file_manager/menu_button.png"/>

Menu button is based on Webix [Button](desktop/button.md) control. 
It is used to activate the <a href="#actionsmenu">Actions menu</a>.

~~~js
{ 
	id: 	"menu", 
    view: 	"button", 
    type: 	"iconButton", 
    css: 	"webix_fmanager_back", 
    icon: 	"bars", 
    width: 	37 
}
~~~

You can get the reference to its object in the following way:

~~~js
var menu = $$("fmanager").$$("menu");
~~~


<h4 id="spacer">Spacer</h4>

The spacer is used to separate the Menu and Back buttons.

~~~js
{
	id: 	"menuSpacer", 
    width: 	65
}
~~~

To refer to its object use the **$$("menuSpacer")** method:

~~~js
var spacer = $$("fmanager").$$("menuSpacer");
~~~


<h4 id="backforward">Back and Forward buttons</h4>

<img src="file_manager/back_forward_buttons.png"/>

The Back and Forward buttons are based on Webix [Button](desktop/button.md). They let move back and forward through the navigation history.

~~~js
//the Back button
{	
    id: 	"back",
	view: 	"button", 
	type:	"iconButton", 
    css: 	"webix_fmanager_back", 
    icon: 	"angle-left", width: 37
}

//the Forward button
{ 
    id: 	"forward",
	view: 	"button", 
    type:	"iconButton", 
    css: 	"webix_fmanager_forward", 
    icon: 	"angle-right", 
    width: 	37
}
~~~

To refer to the object of the buttons, use the **$$("back")** and **$$("forward")** buttons, respectively:

~~~js
//for the Back button
var bback = $$("fmanager").$$("back");

//for the Forward button
var bforward = $$("fmanager").$$("forward");
~~~


<h4 id="levelup">LevelUp button</h4>

<img src="file_manager/levelup_button.png"/>

The Level Up button is based on Webix [Button](desktop/button.md). 
It selects the parent folder of the selected item (file/folder):

~~~js
{
    id: 		"up",
	view:		"button", 
    type:		"iconButton", 
    css:		"webix_fmanager_up", 
    icon:		"level-up", 
    disable:	true, 
    width:		37
}
~~~

You can get the reference to its object in the following way:

~~~js
var levelUp = $$("fmanager").$$("up");
~~~


<h4 id="path">Path view</h4>

<img src="file_manager/path_view.png"/>

The Path view displays the path to the currently selected item (file/folder). 

~~~js
{ 
	id: "path"
	view: "path", 
    borderless: true
}
~~~

To refer to its object use the **$$("path")** method:

~~~js
var path = $$("fmanager").$$("path");
~~~



<h4 id="search">Search control</h4>

<img src="file_manager/search_control.png"/>

The Search element is based on Webix [Search](desktop/search.md) control and allows searching for files and folders, 
the names of which contain the entered letter combinations:

~~~js
{ 
	id: "search", 
    view: "search", 
    gravity: 0.3 
}
~~~

You can use the **$$("search")** method to refer to its object:

~~~js
var search = $$("fmanager").$$("search");
~~~

<h4 id="modes">Modes button</h4>

<img src="file_manager/modes_button.png"/>

The Modes button presents a segmented button, based on Webix [Segmented Button](desktop/segmented.md) control. 
It lets switch between two modes of displaying folders and files: <a href="#filesandtable">"Files" and "Table"</a>. 

~~~js
{ 
   id: 		"modes", 
   view: 	"segmented",  
   value: 	settings.mode,
   options: [
      // options
   ]
}
~~~

The options are specified as an array:

~~~js
[
	{
		id: "files",
        width: 32,
        value: "<span class=\"webix_fmanager_mode_option webix_icon fa-th\"></span>"
	},
	{
		id: "table",
        width: 32,
        value: "<span class=\"webix_fmanager_mode_option webix_icon fa-list-ul\"></span>"
	}
]
~~~

To refer to its object use the **$$("modes")** method:

~~~js
var modes = $$("fmanager").$$("modes");
~~~

<h3 id="body">bodyLayout</h3>

bodyLayout includes 3 columns: Tree, Resizer view and a column with "Files" and "Tree" view modes.

<h4 id="tree">Tree</h4>

The Tree is based on Webix datatree/index.md. It displays the hierarchy of folders and allows navigating through them.

~~~js
{
    id: "tree",
	width: 230,
	view: "filetree",
	select: true,
	filterMode:{
		showSubItems:false,
		openParents:false
	},
	type: "FileTree",
    // mouse navigation
	navigation: true,
	scroll: true,
    // editing options
	editor:"text",
	editable: true,
    // disable editing on double-click
	editaction: false,
    // drag-n-drop
	drag: true,
    // tab 'key' navigation
	tabFocus: true,
    // context menu
	onContext:{}
}
~~~

Tree uses "FileTree" data type that configures folder icons for nodes:

~~~js
webix.type(webix.ui.tree,{
	name: "FileTree",
	folder: function(obj, common){
		if (obj.icon)
			return "<div class='webix_icon icon fa-folder'></div>";
		if (obj.$count && obj.open)
			return "<div class='webix_icon icon fa-folder-open'></div>";
		return "<div class='webix_icon icon fa-folder'></div>";
	}
});
~~~

You can get the reference to tree object in the following way:

~~~js
var tree = $$("fmanager").$$("tree");
~~~

<h4 id="resizer">Resizer view</h4>

Resizer is a draggable border between the Tree and the File views. It is based on Webix <a href="desktop/layout.md#resizerlines">Resizer</a>.

~~~js
{
	view:"resizer", 
    width:2
}
~~~

<h4 id="filesandtable">View modes</h4>


These are 2 modes of viewing files of the selected folder: "Files" and "Table". 
By default, the "Table" mode is active.

**Files mode**

"Files" mode is based on Webix desktop/dataview.md.

~~~js
{
    id: "files",
	view: "fileview",
	type: "FileView",
	select: "multiselect",
    // editing options
	editable:true,
    editor:"text",
	editValue:"value",
    // disable editing on double-click
    editaction: false,
    // drag-n-drop
	drag: true,
    // mouse navigation
	navigation: true,
    // tab 'key' navigation
	tabFocus: true,
    // context menu
	onContext:{}
}
~~~
   
"Table" mode is based on Webix datatable/index.md component.
   
~~~js   
{
    id: "table",
	view: "filetable",
	css: "webix_fmanager_list",
	columns: "columns",
    // editing options
	editable: true,
    // disable editing on double-click
	editaction: false,
	select: "multiselect",
    // drag-n-drop
	drag: true,
    // mouse navigation
	navigation: true,
	resizeColumn:true,
    // tab 'key' navigation
	tabFocus: true,
    // context menu
	onContext:{}		
}
~~~


Actions menu
----------------

The Actions menu displays actions that can be applied to selected files or folders. 
It appears by clicking the Menu button or by clicking the right mouse button:

<img src="file_manager/toolbar_with_menu.png"/>

The Actions menu is based on Webix desktop/contextmenu.md. That's why you can operate its items via api/refs/treestore.md API. 

To refer to the Actions menu, you can apply the **getMenu()** method to File Manager:

~~~js
var actions = $$("fmanager").getMenu();
~~~

By default, actions menu contains the following data array:

~~~js
[
	{
		id: "copy", 
        method: "markCopy",  
        icon: "copy", 
        batch:"item",
        value: webix.i18n.filemanager.copy // "Copy"
	},
	{
		id: "cut", 
        method: "markCut", 
        icon: "cut", 
        batch:"item",
        value: webix.i18n.filemanager.cut // "Cut"
	},
	{
		id: "paste", 
        method: "pasteFile", 
        icon: "paste", 
        value: webix.i18n.filemanager.paste // "Paste"
	},
	{ 	$template:"Separator" },
	{
		id: "create", 
        method: "createFolder", 
        icon: "folder-o", 
        value: webix.i18n.filemanager.create // "Create Folder"
	},
	{
		id: "remove", 
        method: "deleteFile", 
        icon: "times", 
        batch:"item",
        value: webix.i18n.filemanager.delete // "Delete"
	},
	{
		id: "edit", 
        method: "editFile",  
        icon: "edit", 
        batch:"item",
        value: webix.i18n.filemanager.rename // "Rename"
	},
	{
		id: "upload", 
        method: "uploadFile", 
        icon: "upload", 
        value: webix.i18n.filemanager.upload  // "Upload"
	}
]
~~~

The properties of actions are the following:

- id - {string} the id of an action
- method - {string} the name of the method that is used to implement the action
- icon - {string} an icon from the Font Awesome collection used for the action
- batch - {string} group that menu item belongs to. Possible value are:
	- *"item"* - the item will be seen only for data items not empty space;
    - *"root"* - the item will be seen for the root item only;
    - if batch is not set, the item will be shown for empty space and all items other than root
- value - {string} the action title 

You can reload data using the following approach:

~~~js
var actions = $$("fmanager").getMenu();
actions.clearAll();
var newData = [{id: "copy", ...},...];
actions.parse(newData); 
~~~

The api/link/ui.proto_add.md method allows adding a new action to menu:

~~~js
actions.add({id: "myAction", icon: "file", value: "My Action"});
~~~

It is possible to set a click handler for the added action using api/mouseevents_onitemclick_event.md event handler:

~~~js
actions.attachEvent("onItemClick", function(id){
   if(id == "myAction"){
       // some code here
   }
});
~~~

To remove an existing action, you can call the api/link/ui.proto_remove.md method for it:

~~~js
actions.remove("upload");
~~~

It is possible to customize actions menu with the help of **menuFilter** function that can filter menu items before showing the menu on page.

~~~js
view:"filemanager",
menuFilter:function(obj){
	//obj - menu item obj
    
    //dataId - id of clicked data item
    var context = this.getContext();
    var dataId = context.id;
    
    if(..some condition ..)
    	return false;
    return true;    
}
~~~

The function should return *true* to show the item, *false* to hide it.

