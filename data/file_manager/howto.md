General How-Tos
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

From now on, users won't ba able to manipulate items. The Menu button will be hidden.

How to hide a view?
-----------------

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

How to add a custom action?
----------------------

The api/link/ui.proto_add.md method allows adding a new action to menu:

~~~js
actions.add({id: "myAction", icon: "file", value: "My Action"});
~~~

How to add a new mode?
------------------------

To create a custom mode of displaying files in the Files view, you need to define a new mode configuration and 
apply the onViewInit event.

For example,  it's possible to create a new mode based on the  desktop/list.md view as follows:


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