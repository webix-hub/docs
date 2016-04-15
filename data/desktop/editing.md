Data Editors
=============

In this article built-in component [editors](#editors) and [edit actions](#editaction) for them are discussed. To learn about Webix editing pattern, go to the [main article](desktop/edit.md).

##Opening and Closing Editors

- an editor for the component is enabled, or opened, by the [**editAction**](#editaction) that is defined for the whole component;
- an editor is closed by **moving focus outside the editor** (e.g. clicking another component part) or by hotkeys **'Enter'** for saving the new value
 and **'Esc'** for exiting without saving.

##Editor Types {#editors}

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
		<td style="width:300px;"> <code>editor:"password"</code> </br> <a href="desktop/editing.md#password">Learn more</a> </td>
		<td style="text-align:center;"><img src="desktop/password_editor.png"/></td>
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
		<td> <code>editor:"multiselect"</code></br> Available in <b>Webix Pro</b> edition only</br><a href="desktop/editing.md#multiselect">Learn more</a></td>
		<td style="text-align:center;"><img src="desktop/multiselect_editor.png"/></td>
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

{{editor http://webix.com/snippet/5ba4767f	Editor Collection }}

###Text {#text}

A base editor for text values of datatable and dataview cells, list rows. By default is enabled on clicking the needed item; 

~~~js
{ id:"title", header:"Film title", editor:"text",
~~~

{{editor http://webix.com/snippet/0f86c36b	Basic Use of Editors }}

###Password {#password}

A base editor for passwords that masks symbols in the input. 

~~~js
//in the property sheet editor is defined by "type"
{ id:"pass", label:"Password", type:"password"}
~~~

{{editor http://webix.com/snippet/decc3b29	Property Sheet: Basic Initialization}}

###Inline-text {#inlinetext}

A customizable text editor. Here you should set a template for the editing area, type and dimensions of an input area;

~~~js
{ id:"year",template:"<input type='text' value='#value#' style='width:130px;'>", 
	editor:"inline-text"}
~~~

{{editor http://webix.com/snippet/6a136026	Using 'inline' editors}}

- If you specify the **editor:"inline-text"** attribute the component will provide a special processing treat for the editor while editing: invoking [edit-related events](api/refs/editability_events.md).
- If you don't specify the **editor** attribute you should provide the processing logic for the editor on your own. 


###Select {#select}

A customizable editor that allow for choosing one of the offered values. It looks like a standard HTML select control.

~~~js
{ id:"type", header:"Category",  editor:"select", options:[...]}
~~~

{{editor http://webix.com/snippet/4a12724e	Using the 'select' editor}}

The options can be defined by either a simple or an associative array as well as by url. [Look here for details](#options).

###Combo {#combo}

Webix [combo](desktop/combo.md) control with the possibility to filter a popup list by entering symbols into the dedicated input;

~~~js
{ id:"title", header:"Film title",  editor:"combo",  options:[...]}
~~~

{{sample 15_datatable/04_editing/15_combo.html}}

- The options can be defined by either a simple or an associative array as well as by url. [Look here for details](#options);
- The editor is subject to [extensive customization](#advancedconfigurationofselecteditors). 

####Pro Extensions for Combo Editor

In the **Webix Pro** edition the editor can be extended to show either a **dataview** or **datatable** in the popup:

- desktop/datasuggest.md#usingdatasuggestaseditor
- desktop/gridsuggest.md#usinggridsuggestaseditor

###Richselect {#richselect}

Webix [richselect](desktop/richselect.md) control that is a non-editable variation of a combo editor.

~~~js
{ id:"title", header:"Film title",  editor:"richselect",  options:[...]}
~~~

{{sample 15_datatable/04_editing/18_richselect.html}}

- The options can be defined by either a simple or an associative array as well as by url. [Look here for details](#options);
- The editor is subject to [extensive customization](#advancedconfigurationofselecteditors). 

####Pro Extensions for Combo Editor

In the **Webix Pro** edition the editor can be extended to show either a **dataview** or **datatable** in the popup:

- desktop/datasuggest.md#usingdatasuggestaseditor
- desktop/gridsuggest.md#usinggridsuggestaseditor

###Multiselect {#multiselect}

{{pronote
The editor is available is **Webix Pro** edition only
}}

The editor is based on Webix [multiselect](desktop/multiselect.md) control and allows selecting multiple options at a time.

~~~js
{ id:"assigned", editor:"multiselect", optionslist:true, options:[...]}
~~~

{{sample 60_pro/01_datatable/04_editors/08_editor_multiselect.html}}

- The **optionlist** property is defined for the editable element (here:column) so that it can parse multiple values from the editor into a single cell value.
- The options can be defined by either a simple or an associative array as well as by url. [Look here for details](#options).
- The editor is subject to [extensive customization](#advancedconfigurationofselecteditors). 

###Checkbox {#checkbox}

A checkbox editor presupposes the choice between two values (true or false). In general, yon can assign any value to "true" and "false" checkbox states. 

~~~js
{ id:"ch3",	header:"CheckBox",template:"{common.checkbox()}", editor:"checkbox"}
~~~

The notation above does nothing with checkbox value. If you want to derive its value as data item property, you should either: 

1) Define checkbox options with values for each state: 

~~~js
{ id:"ch3", template:"{common.checkbox()}", editor:"checkbox", options:{
	"true":"On","false":"Off","undefined":"Off"}
~~~

{{sample 15_datatable/04_editing/09_inline_editors.html}}

2) Set **checkValue** and **unCheckValue** pair:

~~~js
{ id:"ch1", checkValue:'on', uncheckValue:'off', template:"{common.checkbox()}", 
	editor:"checkbox"}
~~~

{{sample 15_datatable/04_editing/07_checkbox.html}}

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

{{sample 15_datatable/04_editing/08_custom_checkbox.html}}

###Color {#color}

It is used for editing color value in the dataset with the help of a [colorboard](desktop/colorboard.md). Colors are stored as hex codes; hence, you should set an appropriate template for a component item to display 
the chosen result as color, for instance, make a colored background. 

~~~js
var tpl="<span style='background:#value#; border-radius:4px;'>&nbsp</span> #value#";

{ id:"start", editor:"color", template:tpl, header:"Color A",width:120}
~~~

{{sample 15_datatable/04_editing/11_colorpicker.html}} 

###Date {#date}

In its essence it is a [datepicker](desktop/datepicker.md) that initializes a [calendar](desktop/calendar.md) to pick the necessary date. 

~~~js
{ map:"(date)#enddate#",	editor:"date",	header:"End date", 	width:120},
~~~

{{sample 15_datatable/04_editing/10_dates.html}}

###Popup {#popup}

A popup window with body contents depending on data you edit. 

- **textarea** - a multi-row input for editing long texts. The popup features *width: 250* and *height:50* by default. 

~~~js
{ id:"title",	header:"Film title", editor:"popup"}
~~~

{{sample 15_datatable/04_editing/12_text_popup.html}}

- **colorboard** and **caledar** -  come in popup windows by default and are set as **date** and **color** editor types.

###$Popup 

configuration for popup editors. 


##Popup Configuration

**Configuring popups in a scope**

You can configure editing controls inside popup windows, e.g. define other dimensions, alter properties of [textarea](desktop/textarea.md), [colorboard](desktop/colorboard.md) and [calendar](desktop/calendar.md) (check the corresponding articles.)

Popup editors can be configured in a scope with the following code. All the same-name editors in the application will be redefined: 
	
~~~js
//config may as well include only text, color and date hash
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

**Configuring popups separately**

Any instance of a popup editor can be configured separately, with the help of a **suggest** property of an item in question: 

{{snippet
Adding a weekHeader to the Date editor
}}
~~~js
{ id:"start", editor:"date", suggest:{
	type:"calendar",
	body:{
		weekNumber:true
	}
}}
~~~

- **type** (string) - type of a suggest list that defines which **Webix component** will be used in a suggest body. The possible values are: 
	- *"list"* - default suggest type that is used for select editors (*combo*, *richselect* and *multiselect*), can be omitted;
    - *"calendar"* - suggest type for *date* editor;
    - *"colorboard"* - suggest type for *color* editor;
- **body** (object) -  configuration of a component ([list](desktop/list.md), [calendar](desktop/calendar.md) or [colorboard](desktop/colorboard.md))

**Select editors** offer a wide range of customization possibilities that are described in detail [separately](#advancedconfigurationofselecteditors). 

##Defining options for select editors {#options}

Options for select editors (**select**, **combo** and **richselect**) are defined under the common pattern width the help of **'options'** attribute of the dedicated column. There exist several possibilities:

1) Options are set **directly** in the "options" attribute either in an **index** or **associative array** as well as in a **JS object**:

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

{{snippet
Options defined by a JS object
}}
~~~js
columns:[
	{ id:"cat_id", editor:"select", options:[
    	"1" : "Thriller",
    	"2" : "Crime",
    	"3" : "Western"
    ]}
]
~~~

{{sample 15_datatable/04_editing/06_select_id.html}}

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
	{ id:"cat_id",  editor:"select", options:"data/options.json"}
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

##Advanced configuration of select editors

Webix select controls, **combo**, **richselect** and **multiselect**, are [highly customizable](desktop/advanced_combo.md), which means that the same-name editors  
can be customized too. The following things can be changed: 

- template of list items;
- template of the input field (combo editor only);
- filtering pattern (combo only);
- text of "Select" button (multiselect only);
- the number of list items in the popup;
- functions can be attached to a list.

Two column attributes are mandatory  - **options** or **collection** to interpret options into text and **suggest** to define the configuration of related popup list: 

~~~js
{ id:"year", editor:"combo", options:years, suggest:{
     template:'#value#', //template of the input when editor is opened, default
     filter:function(item,value){ //redefines default webix combo filter
     	if (item.value.toString().toLowerCase().indexOf(value.toLowerCase())===0) 
        	return true;
     	return false;
     },
     body:{
        template:'Year #value#', //template of list items
        yCount:7, //10 by default
        on:{
           'onItemClick':function(id){
                webix.message(this.getItem(id).value);
            }
        }
     }}
}
~~~

{{sample 15_datatable/04_editing/21_advanced_combo.html}}

**Multiselect specificity**

To configure a suggest list for a multiselect editor, one should specify its suggest type - [multisuggest](api/refs/ui.multisuggest.md): 

~~~js
{ id:"year", editor:"multiselect", options:years, optionlist:true, suggest:{
	view:"multisuggest",
    buttonText:"Select items"
}}
~~~


##Datatable and treetable specificity - live editors

Webix [datatable](datatable/index.md), [treetable](desktop/treetable.md) and [property sheet](desktop/property_sheet.md)  can use any of the above mentioned editors in **live** mode and update the same data property is case it's used in another column other than the edited one.

~~~js
//"rating" is used in both columns while it can be editable only in the first one
columns:[
	{ id:"rating",	header:"Count", editor:"inline-text", liveEdit:true},
	{ template:"#rating#", width:150 }
]
~~~

{{sample 15_datatable/04_editing/19_live_editor.html}}

The moment the second column (the one that is automatically edited) changes its value, api/editability_onliveedit_event.md event takes place. 

##Edit Actions {#editaction}

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

For instance, this is how a built-in text editor is made:

~~~js
webix.editors.myeditor = {
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
}
~~~

Inner properties

- **this.node** - HTML tag of the editor. Appears after *render()* execution;
- **this.value** - the initial value of an input. Appears after *setValue();* execution;
- **this.config** - editor configuration; 
- **this.popup** - popup ID (is used for editors with popup windows)
    
##Extending Functionality of an Editor

In addition to creating an editor "from scratch", you can extend any of the existing ones. It becomes helpful when slight changes are needed. 

For instance you have a datatable column with e-mails. Input type **email** from HTML5 package will warn you in case some of e-mail address features are missing. The cell will be highlighted red. 

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