Fine-tuning File Manager Structure
==========================

File Manager consists of several Webix views. 
The main layout includes two rows: a row with a toolbar and the second row with a sublayout that has Tree and mode views. 
So, the structure is:

- toolbar:
	- <a href="#menubutton">'menu' button</a> 
	- <a href="#spacer">spacer</a> 
	- group of two buttons: <a href="#backforward">'back' and 'forward'</a> 
	- <a href="#levelup">'levelUp' button</a> 
	- <a href="#path">'path' view</a> 
	- <a href="#search">search control</a> 
	- <a href="#modes">'modes' button</a> 
- layout with 3 columns:
	- <a href="#tree">tree</a> 
	- <a href="#resizer">resizer view</a> 
	- mode views: <a href="#filesandtable">'files' and 'table'</a> 


File Manager consists of several views, the main of them are: toolbar, tree and layout.

It also possesses a flexible layout that you can customize according to your preferences.

It means that if you want to swap a toolbar element with another one or even to remove it, the functionality of File Manager will remain untouched.

Toolbar
---------------

<img src="file_manager/toolbar.png"/>

Toolbar is based on Webix Toolbar view and you can use $$("toolbar") method to refer its object:

~~~js
var toolbar = $$("fmanager").$$("toolbar");
~~~

<h3 id="menubutton">Menu button</h3>

Menu button is based on Webix button. And here is how you can get the reference to its object:

~~~js
var menu = $$("fmanager").$$("menu");
~~~

Init

~~~js
{ view: "button", type: "iconButton", css: "webix_fmanager_back", icon: "bars", width: 37 }
~~~


###"Actions" menu


The Actions menu displays actions that can be applied to selected files or folders. 
It appears by clicking the "menu" button or by clicking the right mouse button:

<img src="file_manager/toolbar_with_menu.png"/>

The "actions" menu is based on Webix desktop/contextmenu.md and that is why it allows operating its items via api/refs/treestore.md API. 

To refer the context menu you can apply $$("action") method to File Manager:

~~~js
var actions = $$("fmanager").$$("actions");
~~~

The default, Context Menu loads the following data source:

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

- id {string} - the id of an action
- method {function} - the name of the method that is used to implement the action
- icon {string} - the icon used for illustrating the action
- value {function} - the local name for the action???

You can reload data using the following approach:

~~~js
var menu = $$("fmanager").$$("actions");
menu.clearAll();
menu.load("data/menu.json");
~~~

The add() method (link) allows to add a new action to menu:

~~~js
actions.add({id: "myAction", icon: "file", value: "My Action"});
~~~

It is possible to set on click handler for the added action using onItemClick event handler:
~~~js
actions.attachEvent("onItemClick", function(id){
   if(id == "myAction"){
       // some code here
   }
});
~~~

To remove an existing action you can call remove() method for it:

~~~js
menu.remove("upload");
~~~

<h3 id="spacer">Spacer</h3>

The spacer is used to separate the "menu" and "back" buttons

~~~js
{id: "menuSpacer", width: 65},
~~~


<h3 id="backforward">Back and Forward buttons</h3>

<img src="file_manager/back_forward_buttons.png"/>

The "back" and "forward" buttons let go back to the folder that navigation started from (move back and forward through the navigation history).

~~~js
//the "back" button
{	
	view: "button", 
	type:"iconButton", 
    css: "webix_fmanager_back", 
    icon: "angle-left", width: 37
}

//the "forward" button
{ 
	view: "button", 
    type:"iconButton", 
    css: "webix_fmanager_forward", 
    icon: "angle-right", 
    width: 37
}
~~~

<h3 id="levelup">"Level up" button</h3>

The "Level up" button selects the parent catalogue of the current tree branch:

<img src="file_manager/levelup_button.png"/>

~~~js
{
	view:"button", 
    type:"iconButton", 
    css:"webix_fmanager_up", 
    icon:"level-up", 
    disable:true, 
    width:37
}
~~~

<h3 id="path">"Path" view</h3>

<img src="file_manager/path_view.png"/>

The path view displays the path to the currently selected folder/file. 


~~~js
{ view: "path", borderless: true}
~~~


<h3 id="search">"Search" control</h3>

<img src="file_manager/search_control.png"/>

The "search" element allows searching for files and folders the names of which contain the entered letter combinations:

~~~js
{ view: "search", gravity: 0.3 }
~~~

<h3 id="modes">"Modes" button</h3>

<img src="file_manager/modes_button.png"/>

The "modes button" presents a segmented button that lets switch between two modes of displaying folders and files: "files" and "table". 

~~~js
{ view: "segmented", options: "modeOptions", value: settings.mode }
~~~

The options are specified as an array:

~~~js
"modeOptions":[
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

Layout
-----------

<h3 id="tree">Tree</h3>

The Tree is based on Webix Tree(link). It displays the hierarchy of folders and allows navigate through them.

~~~js
webix.type(webix.ui.tree,{
	name: "FileTree",
	css: "webix_fmanager_tree",
	folder:function(obj, common){
		if (obj.icon)
			return "<div class='webix_icon icon fa-folder'></div>";
		if (obj.$count && obj.open)
			return "<div class='webix_icon icon fa-folder-open'></div>";
		return "<div class='webix_icon icon fa-folder'></div>";
	}
});
~~~

<h3 id="resizer">"Resizer" view</h3>

Resizer is a draggable border between the Tree and the File views

~~~js
{view:"resizer", width:2}
~~~

<h3 id="filesandtable">'Files' and 'Table' mode views</h3>


These are 2 modes of viewing files of the selected folder. By default, the "table" mode is active.

~~~js
//the "files" view
"files": {
			config:{
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
		}
        
//the "table" view
"table": {
			config: {
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
     	}
~~~


Adding a new column
-------------------

You can add a new column into the "table" view. 
For this purpose you should use onViewInit event (see above) to customize the view 
and insert [column configuration](http://docs.webix.com/datatable__columns_configuration.html) into "columns" array of the table.

Here is an example of adding the new column into the 3rd position:

~~~js
var fManager = new webix.ui({
   view: "filemanager",
   on:{
	   "onViewInit": function(name, config){
           if( name == "table" ){
              // an array with columns configuration
			  var columns = config.columns;
              // the configuration for the new column 
			  var newColumn = {
                id: "new",
				header:"New column",
				fillspace: 1,
				css: "my_style",
				template: function(obj,common){
					return "Added";
				}
			 };
             // insert teh column
			 columns.splice(2,0,newColumn);
		  }
	   }
	}
});
~~~

Structure customization
-----------------------

In some cases, we can face the necessity to customize existing views of File Manager. 
For example, let's turn off multi-selection for the 'table' and 'files' views".

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



Hiding views
-------------

It is possible to hide any view of File Manager by calling the "hide()" method.
For example, imagine that you need to remove the "Menu" button and the Spacer between the Menu and Back buttons:

~~~js
webix.ready(function(){
	webix.ui({
		view:"filemanager",
		id:"files",
		// hide 'menu' button
		$$("files").$$("menu").hide();
		// hide a spacer between 'menu' and 'back' buttons
		$$("files").$$("menuSpacer").hide();
    });
	$$("files").load("../common/data.php");
});
~~~


Adding a custom mode
--------------------

There's a possibility to create a custom mode of displaying files in the Files view. 
The example below will illustrate the idea of creating a new mode based on List view (link to List docs):

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


