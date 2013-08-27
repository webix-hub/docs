DataTable Editing
=========================
DataTable is an editable component, i.e. users have the possibility to edit it manually.

Generally, to make the table editable you should set parameter api/link/ui.datatable_editable_config.md to true.

{{snippet
Making DataTable editable
}}
~~~js
dtable = new webix.ui({
	view:"datatable",
	...
	editable:true
});
~~~
{{sample 15_datatable/04_editing/01_basic.html }}

2 main points related to editing are:

1. [The types of available editors](#editors).
2. [The action on which the cell(s) editor(s) will be opened](#settingtheactiontoopeneditorson).

Editors
------------------------------------
The library provides 3 predefined editors:

- [text](#text)
- [select](#select)
- [inline-text](#inlinetext)

To assign the appropriate editor type to a column, you should specify attribute **editor** of the api/ui.datatable_columns_config.md parameter and set it to some of types.

{{snippet Specifying the editor for a column
}}
~~~js
columns:[
	{ id:"title", 	header:"Film title",	editor:"text"}
]
~~~
{{sample 15_datatable/04_editing/01_basic.html }}

<h3 id="text">text</h3>

A basic text editor.

<img src="datatable/text_editor.png"></img>

{{snippet
Specifying the 'text' editor for the column
}}

~~~js
dtable = new webix.ui({
	view:"datatable",
	...
	editable:true,
    columns:[
		{ id:"title", header:"Film title",    editor:"text"},
		{ id:"year",  header:"Release year",  editor:"text"}
	]
});
~~~

{{sample 15_datatable/04_editing/01_basic.html }}

<h3 id="select">select</h3>

A dropdown list.

<img src="datatable/select_editor.png"></img>

{{snippet
Specifying the 'select' editor for the column
}}

~~~js
dtable = new webix.ui({
	view:"datatable",
	...
	editable:true,
	columns:[
		{ id:"title",  editor:"text",	header:"Film title"},
		{ id:"cat_id", editor:"select", options:["Crime", "Thriller"], 
        header:"Category"},
	]
});
~~~

####Defining the select options
The select options for the editor can be set in 2 ways:

<br>
1) *Directly in the **options** attribute*.

{{snippet
Setting select options in the constructor
}}
~~~js
columns:[
	...
	{ id:"cat_id", editor:"select", options:["Crime", "Thriller", "Western"], 
    header:"Category"}
]
~~~
{{sample 15_datatable/04_editing/04_select.html }}

<br>

2) *As a separate variable containing key/value pairs. In this case the **options** attribute must be set to the name of this variable*.

{{snippet
Setting select options in a variable
}}
~~~js
var film_options = {
	"1" : "Thriller",
	"2" : "Crime",
	"3" : "Western"
}
...

columns:[
	...
	{ id:"cat_id", editor:"select",	options:film_options, header:"Category"}
]
~~~
{{sample 15_datatable/04_editing/06_select_id.html }}

<h3 id="inlinetext">inline-text</h3>

Allows presenting a standard text input in any custom way you wish (apply any style and add any content). In other words, **inline-text** is a customised text editor.

<img src="datatable/inline_text.png"></img>

The desired look-and-feel for the editor is achieved with the help of **template** attribute. The value you define there DataTable will interpret as a text input.
To get detail information about templates, read article datatable/templates.md. 


{{snippet
Specifying the 'inline-text' editor for the column
}}
~~~js
columns:[
	...
    { id:"title", header:"Film title",    editor:"text"},
    { id:"year",  header:"Release year",  editor:"inline-text", 
    template:"<input type='text' value='#value#' style='width:70px;'>"}
]
~~~

{{sample 15_datatable/04_editing/09_inline_editors.html }}

<br>

You can get the same text input specifying just **template** without using the **editor** attribute. So what is the matter to use the **editor** attribute? 

If you specify the **editor:"inline-text"** attribute DataTable will provide a special processing treat for the editor while editing: invoking edit-related events 
(api/link/ui.datatable_onbeforeeditstart_event.md, api/link/ui.datatable_onbeforeeditstop_event.md etc.), support for the 'Tab' key navigation and so on.<br>
If you don't specify the **editor** attribute you should provide the processing logic for the editor on your own. 




Creating a custom editor
----------------------------------

To create a custom editor, you should set the following methods to it:   

- **focus()** - sets the focus to the input with the editor.
- **getValue()** - gets the value of the editor.
- **setValue()** - sets the value of the editor.
- **render()** - renders the editor.



webix.editors = {
    "myeditor":{
		focus:function(){...}
        getValue:function(){...},
        setValue:function(value){...},
        render:function(){...}
     }
  };

The functions are defines with the help of the following inner properties: 

- **this.node** - HTML tag of the editor. Appears after render() execution;
- **this.value** - the initial value of an input. Appears after setValue(); execution;
- **this.config** - editor configuration;
- **this.popup** - popup ID (is used for editors with popup windows)


After your editor is in the collection, you can set it for a column using the familiar technique:

{{snippet 
Adding a new editor and setting it for the column
}}
~~~js
webix.ui({
	view:"datatable",
	columns:[
	...
		{ id:"title", header:"Film title", editor:"myeditor"}
	]
});
~~~

Find more info on Data Editors in the dedicated chapter of the [manual](desktop/editing.md).

Setting the action to open editors on
--------------------------------------------
Generally, to set the action on which editors will be opened you should use the api/link/ui.datatable_editaction_config.md property. 

###Default actions
By default, editors are opened on a single click.  To make opening editors occured on a double click, you should set api/link/ui.datatable_editaction_config.md to *dblclick* as in:

{{snippet
Opening editors on a double click
}}
~~~js
webix.ui({
    view:"datatable",
    editable:true,
    editaction:"dblclick"
    ...
});
~~~

###Custom actions

Using some other action/keyboard key for opening requires some more treat cause you should provide all 'open-edit-close' logic by yourself. 

**To open editors on some keyboard key press** you should do the following:

- set the  api/link/ui.datatable_editaction_config.md property to value 'custom'.
- use the api/refs/uimanager.md mixin (method api/uimanager_addhotkey.md ) to add a hot key and define the processing logic.


{{snippet
Opening editors on the Enter key press
}}
~~~js
var mytable = new webix.ui({
	view:"datatable",
	...
    editable:true,
    editaction:"custom"
});


webix.UIManager.addHotKey("enter", function(view){
	var pos = view.getSelectedId();
	view.edit(pos);
}, mytable);
~~~

{{sample 15_datatable/04_editing/01_basic.html }}

**To open editors on some action** you should do the following:

- set the  api/link/ui.datatable_editaction_config.md property to value 'custom'.
- specify the action (through the related event) and define the processing logic (in the event handler function). You can do this with the help of the api/link/ui.datatable_on_config.md parameter or the api/link/ui.datatable_attachevent.md
method.

{{snippet
Opening editors on cell selecting
}}
~~~js
var mytable = new webix.ui({
	view:"datatable",
	...
    editable:true,
    editaction:"custom",
    select:"cell",
	on:{
		"onAfterSelect":function(data,prevent){
			this.editCell(data.row, data.column);
		}
	}
})
~~~

Use case: editing the entire row, column
----------------------------------------
To open for editing all cells of the specified row/column make the following:


1. Set the  api/link/ui.datatable_editaction_config.md property to value 'custom'.
2. Use the api/link/ui.datatable_on_config.md parameter to specify the action and define the processing logic:
	* as an event to handle - api/link/ui.datatable_onitemclick_event.md.
    * api/ui.datatable_editrow.md, api/ui.datatable_editcolumn.md  enables the edit mode for the specified row/column (opens all editors)
   
   
{{snippet
Opening editors in all cells of the row, column
}}
~~~js
//editing the entire row
var table1 = new webix.ui({
	view:"datatable",
	...
    editable:true,
    editaction:"custom",
	on:{
		"onItemClick":function(id){
			this.editRow(id);
		}
	}
});

//editing the entire column
var table2 = new webix.ui({
	view:"datatable",
	...
    editable:true,
    editaction:"custom",
	on:{
		"onItemClick":function(id){
			this.editColumn(id);
		}
	}
})
~~~

{{sample 15_datatable/04_editing/03_multiple_editors.html }}

Apart from row and column editing, datatable API offers the possibilities to 

- programmatically open editor in the next cell of the row (provided that it is editable) - **editNext()** method;
- move focus to the active editor (if any) - **focusEditor()** mehtod;
- close the editor without saving changes - **editCancel()** method;
- close the editor while saving changes - **editStop()** method.

The Tab key navigation
---------------------------------------------
By default, the Tab(Tab+Shift) key(s) allows navigating within editors defined in the table. 

**Main points:**

- The Tab key press closes the current editor and opens the next one. If the current editor is last in a row, the next one will be opened in the next row (from the beginning).
- The Tab+Shift keys press closes the current editor and opens the previous one. If the current editor is first in a row, the next one will be opened in the previous row (from the end).
- If a cell doesn't have the editor  specified, it won't be included to navigation.  
- The opened editor always resides in the visible area. It means that if you click Tab and the cell is out of the visible area then the table will be scrolled to show it ( regardless of the mode set).
- When multiple editors are opened in the table at the same time, Tab/Tab+Shift navigates within the opened editors.  


{{sample 15_datatable/04_editing/28_scroll.html }}

{{sample 15_datatable/04_editing/03_multiple_editors.html }}

