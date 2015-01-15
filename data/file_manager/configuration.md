Fine-tuning File Manager Structure
==========================

Structure of elements
---------------------

File Manager consists of several Webix views. 

The main layout includes two rows: a row with a toolbar and the second row with a sublayout that contains Tree and mode views. 
Thus, the structure of File Manager is:

- toolbar:
	- <a href="#menubutton">Menu button</a> 
	- <a href="#spacer">Spacer</a> 
	- <a href="#backforward">Back and Forward</a> group of buttons
	- <a href="#levelup">LevelUp button</a> 
	- <a href="#path">Path view</a> 
	- <a href="#search">Search control</a> 
	- <a href="#modes">Modes button</a> 
- layout with 3 columns:
	- <a href="#tree">Tree</a> 
	- <a href="#resizer">Resizer view</a> 
	- <a href="#filesandtable">'Files' and 'Table'</a> mode views

The layout of File Manager is rather flexible. It means that you can customize it according to your preferences.

For example, if you want to swap one toolbar element with another one or even to remove it, the functionality of File Manager will remain untouched.


###Toolbar


<img src="file_manager/toolbar.png"/>

Toolbar is based on Webix desktop/toolbar.md view and you can use the **$$("toolbar")** method to refer to its object:

~~~js
var toolbar = $$("fmanager").$$("toolbar");
~~~

Its configuration looks as follows:

~~~js
{
    id: "toolbar",
	css: "webix_fmanager_toolbar",
    paddingX: 10,
	paddingY:5,
	margin: 7,
	cols:[
       // buttons 
    ]
}

<h4 id="menubutton">Menu button</h4>

Menu button is based on Webix [Button](desktop/controls.md#button) control. You can get the reference to its object in the following way:

~~~js
var menu = $$("fmanager").$$("menu");
~~~

Init

~~~js
{ id: "menu", view: "button", type: "iconButton", css: "webix_fmanager_back", icon: "bars", width: 37 }
~~~


####Actions menu


The Actions menu displays actions that can be applied to selected files or folders. 
It appears by clicking the "menu" button or by clicking the right mouse button:

<img src="file_manager/toolbar_with_menu.png"/>

The Actions menu is based on Webix desktop/contextmenu.md. That's why you can operate its items via api/refs/treestore.md API. 

To refer to the context menu, you can apply the **$$("actions") method** to File Manager:

~~~js
var actions = $$("fmanager").$$("actions");
~~~

By default, context menu loads the following data source:

~~~js
[
	{
		id: "copy", 
        method: "markCopy",  
        icon: "copy", 
        value: webix.i18n.filemanager.copy
	},
	{
		id: "cut", 
        method: "markCut", 
        icon: "cut", 
        value: webix.i18n.filemanager.cut
	},
	{
		id: "paste", 
        method: "pasteFile", 
        icon: "paste", 
        value: webix.i18n.filemanager.paste
	},
	{ 	$template:"Separator" },
	{
		id: "create", 
        method: "createFolder", 
        icon: "folder-o", 
        value: webix.i18n.filemanager.create
	},
	{
		id: "deleteFile", 
        method: "deleteFile", 
        icon: "times", 
        value: webix.i18n.filemanager.delete
	},
	{
		id: "edit", 
        method: "editFile",  
        icon: "edit", 
        value: webix.i18n.filemanager.rename
	},
	{
		id: "upload", 
        method: "uploadFile", 
        icon: "upload", 
        value: webix.i18n.filemanager.upload
	}
]
~~~

The parameters of actions in the function are the following:

- id - {string} the id of an action
- method - {function} the name of the method that is used to implement the action
- icon - {string} an icon from the Font Awesome collection used for the action
- value - {function} the (local) method used to implement the action 

You can reload data using the following approach:

~~~js
var menu = $$("fmanager").$$("actions");
menu.clearAll();
menu.load("data/menu.json");
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
menu.remove("upload");
~~~

<h4 id="spacer">Spacer</h4>

The spacer is used to separate the "menu" and "back" buttons

~~~js
{id: "menuSpacer", width: 65},
~~~


<h4 id="backforward">Back and Forward buttons</h4>

<img src="file_manager/back_forward_buttons.png"/>

The Back and Forward buttons are based on Webix [Button](desktop/controls.md#button). They let move back and forward through the navigation history.

~~~js
//the "back" button
{	
    id: "back",
	view: "button", 
	type:"iconButton", 
    css: "webix_fmanager_back", 
    icon: "angle-left", width: 37
}

//the "forward" button
{ 
    id: "forward",
	view: "button", 
    type:"iconButton", 
    css: "webix_fmanager_forward", 
    icon: "angle-right", 
    width: 37
}
~~~

<h4 id="levelup">LevelUp button</h4>

The Level Up button is based on Webix [Button](desktop/controls.md#button). It selects the parent folder of the selected item (file/folder):

<img src="file_manager/levelup_button.png"/>

~~~js
{
    id: "levelUp",
	view:"button", 
    type:"iconButton", 
    css:"webix_fmanager_up", 
    icon:"level-up", 
    disable:true, 
    width:37
}
~~~

<h4 id="path">Path view</h4>

<img src="file_manager/path_view.png"/>

The Path view displays the path to the currently selected item (file/folder). 


~~~js
{ view: "path", borderless: true}
~~~


<h4 id="search">Search control</h4>

<img src="file_manager/search_control.png"/>

The Search element is based on Webix [Search](desktop/controls.md#search) control and allows searching for files and folders, 
the names of which contain the entered letter combinations:

~~~js
{ id: "search", view: "search", gravity: 0.3 }
~~~

<h4 id="modes">Modes button</h4>

<img src="file_manager/modes_button.png"/>

The Modes button presents a segmented button, based on Webix [Segmented Button](desktop/controls.md#segmentedbutton) control. 
It lets switch between two modes of displaying folders and files: "files" and "table". 

~~~js
{ 
   id: "modes", 
   view: "segmented",  
   value: settings.mode,
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
],
~~~

###Layout


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
	navigation: true,
	scroll: true,
	editor:"text",
	editable: true,
	editaction: false,
	drag: true,
	tabFocus: true,
	onContext:{}
}
~~~

Tree use "FileTree" data type that configures folder icons for nodes:

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

<h4 id="resizer">Resizer view</h4>

Resizer is a draggable border between the Tree and the File views

~~~js
{view:"resizer", width:2}
~~~

<h4 id="filesandtable">'Files' and 'Table' mode views</h4>


These are 2 modes of viewing files of the selected folder. By default, the "table" mode is active.

~~~js
//the "files" view
"files": {
	view: "fileview",
	type: "FileView",
	select: "multiselect",
	editable:true,
	editaction: false,
	editor:"text",
	editValue:"value",
	drag: true,
	navigation: true,
	tabFocus: true,
	onContext:{}
}
        
//the "table" view
"table": {
	view: "filetable",
	css: "webix_fmanager_list",
	columns: "columns",
	editable: true,
	editaction: false,
	select: "multiselect",
	drag: true,
	navigation: true,
	resizeColumn:true,
	tabFocus: true,
	onContext:{}		
}
~~~


Structure customization
-----------------------

In some cases, we can face the necessity to change the structure of File Manager:
add a new column or a custom mode, hide views or customize existing views. 

Examples of all these cases are described below.


###Customizing existing views

To illustrate this possibility, let's turn off multiple selection for the 'table' and 'files' views".

To implement such configuration, we can use the "onViewInit" event:

~~~js
webix.ready(function(){
	webix.ui({
		view:"filemanager",
		id:"files",
		on:{
        	"onViewInit": function(name, config){
        		// disable multi-selection for "table" and "files" views
        		if (name == "table" || name == "files"){
        			config.select = true;
				}
			}
		}
	});

	$$("files").load("../common/data.php");
});
~~~

{{sample
64_file_manager/03_customization/01_views_configuration.html
}}


###Adding a new column


You can add a new column into the "table" view. 
For this purpose you should use the onViewInit event (described in the above example) to customize the view 
and insert [column configuration](http://docs.webix.com/datatable__columns_configuration.html) into the "columns" array of the table.

Here is an example of adding a new column into the 3rd position:

~~~js
var fManager = new webix.ui({
   view: "filemanager",
   on:{
	   "onViewInit": function(name, config){
           if( name == "table" ){
              // an array with columns configuration
			  var columns = config.columns;
              // configuration of a new column 
			  var newColumn = {
                id: "new",
				header:"New column",
				fillspace: 1,
				css: "my_style",
				template: function(obj,common){
					return "Added";
				}
			 };
             // insert a column
			 columns.splice(2,0,newColumn);
		  }
	   }
	}
});
~~~

{{sample
64_file_manager/03_customization/02_new_column.html
}}

###Adding a custom mode


There's a possibility to create a custom mode of displaying files in the Files view. 
The example below illustrates the idea of creating a new mode based on desktop/list.md view:

~~~js
webix.ui({
	view:"filemanager",
    id:"files",
    // specify mode selected by default
    mode: "custom",
    // all available modes including a new mode
    modes:["files","table","custom"],
    // object with configuration for new views of File Manager
    structure:{
        // specify the view of the new mode
		"custom": {
			view: "list",
			template: function(obj,common){
				return "<span class='webix_icon fa-"
                	+(common.icons[obj.type]||common.icons["default"])+"'></span>"
                    +obj.value;
			},
			select: "multiselect",
            editable:true,
            editaction: false,
            editor:"text",
            editValue:"value",
            drag: true,
            navigation: true,
            tabFocus: true,
            onContext:{}
		}
    },
    on:{
		"onViewInit": function(name, obj){
		   if (name == "modes"){
				obj.width += 32;
				obj.options.push({
				   id: "custom",
				   width: 32,
				   value: "<span class='webix_fmanager_mode_option webix_icon fa-list-ol'></span>"
			    });
		   }
		}
	}
});
~~~

{{sample
64_file_manager/03_customization/03_adding_mode.html
}}

###Hiding views


It is possible to hide any view of File Manager by calling the "hide()" method.

For example, imagine that you need to remove the Menu button and the spacer between the Menu and Back buttons. 
To implement this task, use the following technique:

~~~js
webix.ready(function(){
	webix.ui({
		view:"filemanager",
		id:"files",
		// hide the 'menu' button
		$$("files").$$("menu").hide();
		// hide the spacer between the 'menu' and 'back' buttons
		$$("files").$$("menuSpacer").hide();
    });
	$$("files").load("../common/data.php");
});
~~~

{{sample
64_file_manager/03_customization/04_hiding_buttons.html
}}
