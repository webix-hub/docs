File Manager General How-Tos
================

How to make File Manager readonly?
----------------------

To activate the readonly mode, you need to set the **readonly** property to **true** in File Manager configuration:

~~~js
webix.ready(function(){
	webix.ui({
		view:"filemanager",
        readonly: true,
        url:"../common/data.php"
	});
});
~~~

From now on, users won't be able to manipulate items. The Menu button will be hidden.

{{sample
64_file_manager/01_basic/05_readonly.html
}}

How to hide a view?
-----------------

It is possible to hide any view of File Manager by calling the api/link/ui.view_hide.md method. 
For example, imagine that you need to remove the Menu button and the spacer between the Menu and Back buttons.

To implement this task, use the following technique:

~~~js
webix.ready(function(){
    webix.ui({
        view:"filemanager",
        id:"files",
    });
    $$("files").load("../common/data.php");
    
     // hide the Menu button
     $$("files").$$("menu").hide();
     // hide the spacer between the Menu and Back buttons
     $$("files").$$("menuSpacer").hide();
});
~~~

{{sample
64_file_manager/03_customization/04_hiding_buttons.html
}}


How to add a custom action?
----------------------

The api/link/ui.proto_add.md method allows adding a new action to menu:

~~~js
var actions = $$("fmanager").getMenu();
actions.add({id: "myAction", icon: "file", value: "My Action"});
~~~

To process clicks on the new action you can set [onItemClick](api/mouseevents_onitemclick_event.md) event handler for actions view: 

~~~js
actions.attachEvent("onItemClick", function(id){
   if(id == "myAction"){
       // some code here
   }
});
~~~
How to add a new mode?
------------------------

To create a custom mode of displaying files in the Files view, you need to define a new mode configuration and 
apply the <a href="file_manager/events.md#onviewinit">onViewInit</a> event.

For example,  it's possible to create a new mode based on the desktop/list.md view as follows:


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
				return common.templateIcon(obj,common)+obj.value;
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
				  value: "<span class='webix_fmanager_mode_option webix_icon fa-file'/>"
			   });
		   }
		}
	}
});
~~~


{{sample
64_file_manager/03_customization/03_adding_mode.html
}}

How to add a new column in "table" mode?
-------------------------------------------

You can add a new column into the "table" view. 
For this purpose you should use the <a href="file_manager/events.md#onviewinit">onViewInit</a> event (described in the above example) to customize the view 
and insert [column configuration](http://docs.webix.com/datatable__columns_configuration.html) into the "columns" array of the table.

Here is an example of inserting a new column after the "Date" column:

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
				header:"Extension",
				fillspace: 1,
				template: function(obj,common){
					return obj.ext||""; // "ext" property of files 
				}
			 };
             // insert a column
			 webix.toArray(columns).insertAt(newColumn,3);
		  }
	   }
	}
});
~~~

{{sample
64_file_manager/03_customization/02_new_column.html
}}

How to customize existing views?
----------------------------------

To illustrate this possibility, let's turn off multiple selection for the 'table' and 'files' views".

We can use the <a href="file_manager/events.md#onviewinit">onViewInit</a> event to customize configuration of exiting views:

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

@spellcheck: Tos

@seolinktop: [html5 library](https://webix.com)
@seolink: [html5 file manager](https://webix.com/filemanager/)