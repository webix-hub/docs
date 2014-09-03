Suggest List
=============

Suggest is a **list of options** for input controls that aids form filling by suggesting the necessary value on the base of already typed text. 

Suggest list can be used with the following components:

- Webix JS [text](desktop/controls.md#text) field;
- standard HTML input;
- [combo](desktop/controls.md#combo) and [richselect](desktop/controls.md#richselect) (is used instead of their *options* property);
- [editor object](desktop/editing.md) within an in-component item. 

Each time you enter a symbol into an input, suggest list is refiltered to match current input value. Default **timeout** between key pressing and filtering equals to 1ms, still it can be modified by the dedicated property. 

~~~js
{
	view:"suggest",
    data:[..] //or url:"some.php",
    keyPressTimeout:100ms
}
~~~

###Suggest List Peculiarity

The combination of **suggest list** and **text** resembles combo and richselect in appearance, but its values are just **hints** and should not be obligatory chosen (like with *richselect* and *combo*). 
You can use this hint and select it, or ignore and type your own value in *text*.

<img src="desktop/suggest.png">

{{sample 13_form/01_controls/15_suggest_server.html }}

**How does it work?**

When you type something in a text input, there appears a [popup window](desktop/popup.md) with a list containing suggest values for you. They are automatically filtered according to the letters you have already typed.

Suggest values can be stored: 

- on **client side**;
- on **server side.**

Suggest list can be initialized as:

1 . **Separate view** attached to an input with the help of the **input** property that points to the input's **ID**:

~~~js
webix.ui({
	view: "suggest",
	input: "country4", // will be linked to 'country4' input
	data: [
		{id:1, value: "Albania"},
		{id:2, value: "Bhutan"},
	... //list of suggest values can be as long as you wish
	]
});

<input type='text' id='country4' value='Sweden' />"}
~~~

2 . The **same-name property** of JS [text](desktop/controls.md#text) input, [combo](desktop/controls.md#combo) and [richselect](desktop/controls.md#richselect):

~~~js
{view:"text", name:"country", label:"Country", value:"Belarus", suggest:[
		{id:1, value: "Albania"},
		{id:2, value: "Bhutan"},
        ...]
}
~~~

3 . The **same-name property** of JS [combo](desktop/controls.md#combo) and [richselect](desktop/controls.md#richselect) and take extensive configuration:

~~~js
webix.ui({
	view:"richselect", suggest:{
    	data:[
        	{id:1, value:"One"},
        	{id:2, value:"Two"} //options list
        ],
        ready: function(){
        	$$("richselect_1").setValue(this.getFirstId()); //defines the initially visible option
        }
    }
});

~~~
{{sample 80_docs/suggest_combo.html}}

{{note
Note that you must select any value from a suggest list, since it's required by combo and richselect nature. 
}}


##Suggest List with Client-Side Data

On the client side the list with suggestions can be stored either of [supported formats](desktop/data_types.md). It may be put directly into **data** property (as shown above) or in a variable declared beforehand. 

{{snippet
Suggest List with JSON data
}}
~~~js
var countries = [
	{id:1, value: "Albania"},
	{id:2, value: "Bhutan"}
];
  
{ view:"text", label:"Country", value:"Belarus", suggest:countries}    
~~~

{{sample 13_form/01_controls/15_suggest_text.html }}

##Suggest List with Server-Side Data

At the same time, data can come from server side. All you need is to specify the script file that will get the data from the database. 

{{snippet
As value of dataFeed property of the Suggest component
}}
~~~js
webix.ui({
	view: "suggest",
	input: document.getElementById("country4"),
	dataFeed:"server/data.php"
});
~~~

{{snippet
As value of suggest property
}}
~~~js
{ view:"text", name:"country", label:"Contry", value:"Albania", suggest:"server/data.php"}
~~~

{{sample 13_form/01_controls/15_suggest_server.html }}

Suggest list is connected with an input field by **suggest** property included into the **text** constructor. 


##Suggest List for In-Component Editors {#component}

[Component editors](desktop/editing.md) duplicate editing controls yet they are inited within the component body. 

<img src="desktop/autosuggest.png">

Suggest can be inited for **combo** and **text** editors. To do this, make the following steps: 

- create a suggest list as **separate view** and populate it with options:

~~~js
var year_suggest = webix.ui({
	view: "suggest",
	data:[]
});
~~~

Configuration of a suggest view coincides with that of a standard Webix [list](desktop/list.md).

- create a component and specify **text** [editor type](desktop/editing.md) for it: 

~~~js
webix.ui({
	view:"datatable",
    columns:[  
        {id:"year", editor:"text"},
    ]
});
~~~

{{sample 15_datatable/04_editing/15_combo.html}}

- link suggest list to the input field of the editor object with the **linkInput** method:

~~~js
grida.attachEvent("onAfterEditStart", function(object){
	if (object.column == "year") { //only for editors in this column
		var editor = this.getEditor(object);
		year_suggest.linkInput(editor.getInput());
	}
});
~~~

- provide logic as well for the end of editing:

~~~js
grida.attachEvent("onAfterEditStop", function(object){
	year_suggest.hide();
});
~~~

{{sample 15_datatable/04_editing/14_autosuggest.html}}

{{note
Suggest list can as well be attached to **combo** and **richselect** editors, yet then it looses its mstatus of 'adviser' and selection from it becomes compulsory.
}}

~~~js
webix.ui({
	view:"datatable",
    columns:[  
        {id:"year", editor:"combo", suggest:{
        	data:[...], //or url:""
            on:{
				//events            
            }
        }}
    ]
});
~~~

##Customizing Suggest List

Suggest list allows defining lots of custom settings in case of a long initialization pattern. 

It works for a suggest defined as a standalone view: 

~~~js
{view:"suggest",
	//popup settings
    ...,
    body:{
        //list settings 
    }
}}
~~~

As well as for a suggest defined as a control property: 

~~~js
{view:"combo", options:{
	//popup settings
    ...,
    body:{
        //list settings 
    }
}}
~~~

- Popup settings include typical [popup properties](api/refs/ui.popup_props.md) and suggest-specific ones, like [fitMaster](api/ui.suggest_fitmaster_config.md), or **url** and **data**;
- List settings inlcude typical [list properties](api/refs/ui.list_props.md). 

{{note
Note that an suggest list configuration can be set via either **suggest** or **options** property for  [richselect](desktop/controls.md#richselect) and [combo](desktop/controls.md#combo) controls. 
}}

**See also:** desktop/advanced_combo.md

##Sizing and Positioning

###Popup height

Suggest list is tuned to show maximum 10 items at a time. If there are more items, a scrollbar appears. If there are fewer item in the list, its height shrinks. 

The number of items in the suggest list can be controlled by an **yCount** property of **list object**:

~~~js
{view:"combo", suggest: { 
    body:{
        yCount:5,
        data:[...] 
    }
}}
~~~

###Popup width

By default, a popup is adjusted to the width of a master control. To change it, set [fitMaster](api/ui.suggest_fitmaster_config.md) property to *false* and define any desirable width or use 
the default 300px:

~~~js
{view:"combo", suggest: { 
    fitMaster:false,
    width:400,
    data:[...] 
}}
~~~

###Popup position

Suggest API offers the following variants of popup positioning in relation to the text field it's inited for: 

- **"bottom"** (default). Doesn't require direct initialization;
- **"top"**;
- **"left"**;
- **"right"**.

Since we speak here about **relative** position, the property to set it has the same name:

~~~js
{ view:"text", suggest:{ data:countries, relative:"left" }}
~~~

{{sample 13_form/01_controls/15_suggest_position.html}}

###API Reference 

[Methods, properties and Events](api/refs/ui.suggest.md)