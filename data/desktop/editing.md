Data editors
=============

##Build-In Text Editors

By default, only [datatable](datatable/index.md) and [treetable](desktop/treetable.md) feature built-in editability. With other library components you should add this functionality by either 
extending its functionality or creating a new, editable component from it. 

**Extend a component with editing ability**:

~~~js
webix.extend($$("list1"), webix.EditAbility); // list1 is the list ID 
~~~

**Creating an Editable component**

~~~js
webix.protoUI({
    name:"editlist" // any name you wish
}, webix.EditAbility, //the needed functionality
webix.ui.list); //the component you'd like to edit
~~~

Then, you should enable editability inside the component constructor alongside with an **editor type** and an **editAction**. Note that in case of a custom component you should specify the new component name (e.g. "editlist").

~~~js
webix.ui({
	view:"editlist", 
    ..config..
    editable:true, 
})
~~~

{{sample 05_list/05_editable.html }} 

**Component Properties**:

- **editor** - type of an editor(described below);
- **editAction** - the event that enables editing. By default editability is triggered by "onItemClick" event (described below).
- **editValue** - template of the data item that you need to edit. The property is used for components with several dataset items included into the component template.


##Editor Types

<table class="list" cellspacing="0" cellpadding="5" border="0">
	<caption class="caption">
		<strong>Table </strong>
		Editor Types
	</caption>
	<tbody>
	<tr>
		<td style="width:300px;"> <code>editor:"text"</code> </br> <a href="desktop/editing.md#text">Learn more</a> </td>
		<td style="text-align:center;"><img src="desktop/text_editor.png"/></td>
	</tr>
	<tr>
		<td> <code>editor:"inline-text"</code> </br> <a href="desktop/editing.md#inlinetext">Learn more</a> </td>
		<td style="text-align:center;"><img src="desktop/inline_text_editor.png"/></td>
	</tr>
	<tr>
		<td> <code>editor:"select"</code> </br> <a href="desktop/editing.md#select">Learn more</a></td>
		<td style="text-align:center;"><img src="desktop/select_editor.png"/></td>
	</tr>
    <tr>
		<td> <code>editor:"combo"</code> </br><a href="desktop/editing.md#combo">Learn more</a></td>
		<td style="text-align:center;"><img src="desktop/combo_editor.png"/></td>
	</tr>
    <tr>
		<td> <code>editor:"richselect"</code> </br><a href="desktop/editing.md#richselect">Learn more</a></td>
		<td style="text-align:center;"><img src="desktop/richselect_editor.png"/></td>
	</tr>
    <tr>
		<td> <code>editor:"checkbox"</code> </br><a href="desktop/editing.md#checkbox">Learn more</a> </td>
		<td style="text-align:center;"><img src="desktop/checkbox_editor.png"/></td>
	</tr>
    <tr>
		<td> <code>editor:"inline-checkbox"</code> </br><a href="desktop/editing.md#inlinecheckbox">Learn more</a> </td>
		<td style="text-align:center;"><img src="desktop/inline_checkbox_editor.png"/></td>
	</tr>
    <tr>
		<td> <code>editor:"color"</code> </br><a href="desktop/editing.md#color">Learn more</a></td>
		<td style="text-align:center;"><img src="desktop/color_editor.png"/></td>
	</tr>
    <tr>
		<td> <code>editor:"date"</code> </br><a href="desktop/editing.md#color">Learn more</a> </td>
		<td style="text-align:center;"><img src="desktop/date_editor.png"/></td>
	</tr>
    <tr>
		<td> <code>editor:"popup"</code> </br><a href="desktop/editing.md#popup">Learn more</a></td>
		<td style="text-align:center;"><img src="desktop/popup_editor.png"/></td>
	</tr>
	</tbody>
</table>

{{sample 80_docs/editors.html }}

###Text {#text}

A base editor for text values of datatable and dataview cells, list rows. By default is enabled on clicking the needed item; 

~~~js
{ id:"title", header:"Film title", editor:"text",
~~~

###Inline-text {#inlinetext}

A customizable text editor. Here you should set a template for the editing area, type and dimensions of an input area;

~~~js
{ id:"year",template:"<input type='text' value='#value#' style='width:130px;'>", editor:"inline-text"}
~~~

If you specify the **editor:"inline-text"** attribute the component will provide a special processing treat for the editor while editing: invoking edit-related events(api__refs__editability_events.html).

If you don't specify the **editor** attribute you should provide the processing logic for the editor on your own. 

###Select {#select}

A customizable editor that allow for choosing one of the offered values. It looks like a standard HTML select control.

~~~js
{ id:"type", header:"Category",  editor:"select", options:[...]}
~~~

The options can be defined by either a simple or an associatibe array as well as by url. [Look here for details](#options).

###Combo {#combo}

Webix [combo](desktop/controls.md#combo) control with the possibility to filter a popup list by entering symbols into the dedicated input;

~~~js
{ id:"title", header:"Film title",  editor:"combo",  options:[...]}
~~~

The options can be defined by either a simple or an associatibe array as well as by url. [Look here for details](#options).

###Richselect {#richselect}

Webix [richselect](desktop/controls.md#richselect) controls that is a non-editable variation of a combo editor.

~~~js
{ id:"title", header:"Film title",  editor:"richselect",  options:[...]}
~~~

The options can be defined by either a simple or an associatibe array as well as by url. [Look here for details](#options).

###Checkbox {#checkbox}

A checkbox editor presupposes the choice between two values (true or false). In general, yon can assign any value to "true" and "false" checkbox states. 

~~~js
{ id:"ch3",	header:"CheckBox", options:{"true":"On","false":"Off","undefined":"Off"}, 
	template:"{common.checkbox()}", editor:"checkbox", width:40}
~~~
###Inline-checkbox {#inlinecheckbox}

A customizable checkbox. You can do without a checkbox icon and define any template for boolean values, even a styled text. 

~~~js
function custom_checkbox(obj, common, value){
	if (value)
		return "<div class='webix_table_checkbox checked'> YES </div>";
	else
		return "<div class='webix_table_checkbox notchecked'> NO </div>";
}
	...
{ id:"ch1", header:"", template:custom_checkbox, width:40, editor:"inline-checkbox"},
~~~

###Color {#color}

It is used for editing color value in the dataset with the help of a [colorboard](desktop/colorboard.md). Colors are stored as hex codes; hence, you should set an appropriate template for a component item to display 
the chosen result as color, for instance, make a colored background. 
~~~js
var tpl = "<span style='background-color:#value#; border-radius:4px;'>&nbsp</span> #value#";

{ id:"start", editor:"color", template:tpl, header:"Color A",width:120}
~~~
###Date {#date}

In its essence it is a [datepicker](desktop/controls.md#datepicker) that initializes a [calendar](desktop/calendar.md) to pick the necessary date. 

~~~js
{ map:"(date)#enddate#",	editor:"date",	header:"End date", 	width:120},
~~~

###Popup {#popup}

A popup window with body contents depending on data you edit. 

- **textarea** - a multi-row input for editing long texts. The popup features *width: 250* and *height:50* by default. 

~~~js
{ id:"title",	header:"Film title", editor:"popup"}
~~~

- **colorboard** and **caledar** -  come in popup windows by default and are set as **date** and **color** editor types.

###$Popup 

configuration for popup editors. 


##Popup Configuration

You can configure editing controls inside popup windows, e.g. define other dimensions, alter properties of [textarea](desktop/controls.md#textarea), [colorboard](desktop/colorboard.md) and [calendar](desktop/calendar.md)
(check the corresponding articles.)

Popup editors can be configured in a scope with the following code: 
	
~~~js
	webix.editors.$popup = {
		text:{
			view:"popup", width:250, height:200,
			body:{view:"textarea"}
		},
		color:{
			view:"popup",
			body:{ view:"colorboard", width:500, height:500, rows:50, cols:50 }
		},
		date:{
			view:"popup",
			body:{ view:"calendar", weekNumber:true }
		}
	};
~~~

##Defining options for select editors {#options}

Options for select editors (**select**, **combo** and **richselect**) are defined under the common pattern width the help of **'options'** attribute of the dedicated column. There exist several possibilities:

1) Options are set **directly** in the "options" attribute either in an index or associative array:

{{snippet
Options defined by a simple array in the column config 
}}
~~~js
columns:[
	{ id:"cat_id", editor:"select", options:["Crime", "Thriller", "Western"]}
]
~~~
{{sample 15_datatable/04_editing/04_select.html }}

{{snippet
Options defined by an associative array in the column config
}}
~~~js
columns:[
	{ id:"cat_id", editor:"select", options:[
    	{id:1, value: "Crime"}, 
        {id:2, value:"Thriller"}, 
        {id:3, value:"Western"}
    ]}
]
~~~

<br>

2) Options are defined by a **separate variable** containing option collection. In this case the "options" attribute must be set to the name of this variable.

{{snippet
Setting select options in a variable
}}
~~~js
var film_options = [
	{id:1, value: "Thriller"},
	{id:2, value: "Crime"},
	{id:3, value: "Western"}
];
//or
var film_options =["Crime", "Thriller", "Western"];
...
columns:[
	{ id:"cat_id", editor:"select",	options:film_options, header:"Category"}
]
~~~
{{sample 15_datatable/04_editing/15_combo.html }}

3) Options are taken from **file** or loaded by **url** defined by "string" value of options attribute. 

{{snippet
Options loaded from an external file
}}
~~~js
columns:[
	{ id:"cat_id",  editor:"select",options:"data/options.json"}
]    

~~~

{{sample 15_datatable/04_editing/20_select_server.html }}

{{note
"Options" have an alias attribute **"collection"** that features the same functionality.
}}

{{snippet
Using "collection" to define options
}}
~~~js
columns:[
	{ id:"cat_id", editor:"combo",	collection:film_options, header:"Category"}
]
~~~


##Edit Actions

- **'click'** - opens the editor on a single click (used by default);
- **'dblclick'** - opens the editor on a double click;
- **'custom'** - allow setting the necessary way of editing, e.g a keyboard event.

When setting an editaction to "custom", you need to refer to UIManager and write a function to enable the needed editing pattern:

~~~js
webix.UIManager.addHotKey("enter", function(view){
		var pos = view.getSelectedId();
		view.edit(pos);
	}, gridc);
~~~

Here editing is enabled on pressing the "Enter" key on the selected item. 


##Custom Editors


The library allows creating fully custom editors.

~~~js
webix.editors = {
	"mytext":{
		focus:function(){...}
        getValue:function(){...},
		setValue:function(value){...},
		render:function(){...}
     }
  };
~~~

To define a new editor, you should specify at least 5 methods for it:

- **focus()** - sets the focus to the input with the editor;
- **getValue()** - gets the value of the editor;
- **setValue()** - sets the value of the editor;
- **render()** - renders the editor;
- **getInputNode()** - gets the input area object.

For instance, this is how a biult-in text editor is made:

~~~js
webix.editors = {
	"text":{
		focus:function(){
			this.getInputNode(this.node).focus();
			this.getInputNode(this.node).select();
		},
		getValue:function(){
			return this.getInputNode(this.node).value;
		},
		setValue:function(value){
			this.getInputNode(this.node).value = value;
		},
		getInputNode:function(){
			return this.node.firstChild;
		},
		render:function(){
			return webix.html.create("div", {
				"class":"webix_dt_editor"
			}, "<input type='text'>");
		}
	},

~~~

Inner properies

- **this.node** - HTML tag of the editor. Appears after *render()* execution;
- **this.value** - the initial value of an input. Appears after *setValue();* execution;
- **this.config** - editor configuration; 
- **this.popup** - popup ID (is used for editors with popup windows)
    
##Extending Functionality of an Editor


In addition to creating an editor "from scratch", you can extend any of the existing ones. It becomes helpful when slight changes are needed. 

For instance you have a datatable column with e-mails. Input type **email** from HTML5 package will warn you in case some of e-mail address features is missing. The cell will be highlighted red. 

<img src="desktop/text_editor_ext.png"/>

In this case you extend the existing **text editor** and change render pattern in it: 

~~~js
	webix.editors.myeditor = webix.extend({
			render:function(){
			return webix.html.create("div", {
				"class":"webix_dt_editor"
			}, "<input type='email'>");
		}}, webix.editors.text);
~~~

{{sample 80_docs/custom_ed.html}}


@complexity:2