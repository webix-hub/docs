Editing
=======================================
Initially, Tree is a non-editable component. But you can easily make Tree editable by extending it with a special class - api/refs/editability.md.

Generally, the technique of making Tree editable looks like this:

- Create a new component and inherit it from  api/refs/ui.tree.md and api/refs/editability.md classes.
- Specify 3 parameters (inherited from api/refs/editability.md)  in the constructor:
	- **editable** - enables editing in the component
    - **editor** - sets the type of the editor
    - **editValue** - the data property that will be edited

By default, editors are opened on a single click.
{{snippet
Making Tree editable
}}
~~~js
webix.protoUI({
	name:"edittree"
}, webix.EditAbility, webix.ui.tree);


tree = new webix.ui({
	view:"edittree",
	...
	editable:true,
	editor:"text",
	editValue:"value"
});
~~~

{{sample
	17_datatree/05_edit/01_selection.html
}}


Types of editors
--------------------------------
There are 2 predefined editors for the tree:

- [text](#text)
- [select](#select)



<h3 id="text">text</h3>

A basic text editor.

<img src="datatree/text_editor.png"></img>

{{snippet
Specifying the 'text' editor for the tree
}}

~~~js
webix.protoUI({
	name:"edittree"
}, webix.EditAbility, webix.ui.tree);


tree = new webix.ui({
	view:"edittree",
	editable:true,
	editValue:"value",
    ...
	editor:"text"
});
~~~

{{sample 15_datatable/04_editing/01_basic.html }}

<h3 id="select">select</h3>

A dropdown list.

<img src="datatree/select_editor.png"></img>

{{snippet
Specifying the 'select' editor for the tree
}}

~~~js
webix.protoUI({
	name:"edittree"
}, webix.EditAbility, webix.ui.tree);


tree = new webix.ui({
	view:"edittree",
	editable:true,
	editValue:"value",
    ...
	editor:"select",
    options:["Toyota", "Skoda"]
});
~~~

####Defining the select options
The select options for the editor can be set in 2 ways:

<br>
1) *Directly in the **options** property (inherited from api/refs/editability.md class)*.

{{snippet
Setting select options in the constructor
}}
~~~js
tree = new webix.ui({
    ...
	editor:"select",
    options:["Toyota", "Skoda"]
});
~~~
{{sample 15_datatable/04_editing/04_select.html }}

<br>

2) *As a separate variable containing key/value pairs. In this case the **options** property must be set to the name of this variable*.

{{snippet
Setting select options in a variable
}}
~~~js
var tree_options = {
	"1" : "Toyota",
	"2" : "Skoda",
}
...

tree = new webix.ui({
    ...
	editor:"select",
    options:tree_options
});
~~~
{{sample 15_datatable/04_editing/06_select_id.html }}


Denying editing specific items
-------------------------------------------------------
To deny editing specific items, branches, levels etc. you can use the api/editability_onbeforeeditstart_event.md event inherited from api/refs/editability.md. The event fires right 
before the user opens the editor and gets the id of the edited item as a parameter.<br> To deny editing of a item - return *false* for it within the appropriate event handler.

{{snippet
Making editable only the 2nd nesting level
}}
~~~js
webix.protoUI({
	name:"edittree"
}, webix.EditAbility, webix.ui.tree);

tree = new webix.ui({
	view:"edittree",
	...			
	editable:true,
	editor:"select",
	editValue:"value",
	data: [
   		{id:"root", value:"Cars", open:true, data:[
			{ id:"1", open:true, value:"Toyota", data:[
				{ id:"1.1", value:"Avalon" },
				{ id:"1.2", value:"Corolla" },
				{ id:"1.3", value:"Camry" }
			]},
			{ id:"2", value:"Skoda", data:[
				{ id:"2.1", value:"Octavia" },
				{ id:"2.2", value:"Superb" }
			]},
		]}
	];

});	
//only car makes (i.e. 'Toyota', 'Skoda') can be edited
tree.attachEvent("onBeforeEditStart", function(id){
	if ( this.getItem(id).$level != 2)
		return false;
});
~~~