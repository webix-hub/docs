Editing in the Tree
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


var tree = new webix.ui({
	view:"edittree",
	...
	editable:true,
	editor:"text",
	editValue:"value"
});
~~~

{{editor http://webix.com/snippet/69d362d1	Editing in Tree}}


Types of editors
--------------------------------
{{note
There are various types of data editors in the Webix library. You can use any of them in different components. To get more details read the article desktop/editing.md.  
}}

Below we'll describe 2 most frequently used editors for the tree:

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

var tree = new webix.ui({
	view:"edittree",
	editable:true,
	editValue:"value",
    ...
	editor:"text"
});
~~~

{{editor http://webix.com/snippet/69d362d1	Editing in Tree}}

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


var tree = new webix.ui({
	view:"edittree",
	editable:true,
	editValue:"value",
    ...
	editor:"select",
    options:["The Shawshank Redemption", "The Godfather"]
});
~~~



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

var tree = new webix.ui({
	view:"edittree",
	...			
	editable:true,
	editor:"select",
	editValue:"value",
	data: [
    	{ id:"1", open:true, value:"The Shawshank Redemption", data:[
    		{ id:"1.1", value:"Part 1" },
    		{ id:"1.2", value:"Part 2" },
    		{ id:"1.3", value:"Part 3" }
    	]},
    	{ id:"2", value:"The Godfather", data:[
    		{ id:"2.1", value:"Part 1" },
    		{ id:"2.2", value:"Part 2" }
    	]}
    ]
});	
//only film parts (i.e. 'Part1', 'Part2') can be edited
tree.attachEvent("onBeforeEditStart", function(id){
	if ( this.getItem(id).$level != 1)
		return false;
});
~~~