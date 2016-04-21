Suggest List
=============

##API Reference 

- [Suggest List API](api/refs/ui.suggest.md)
- [Multisuggest API](api/refs/ui.multisuggest.md)
- [Checksuggest API](api/refs/ui.checksuggest.md)
- [Gridsuggest API](api/refs/ui.gridsuggest.md)
- [Datasuggest API](api/refs/ui.datasuggest.md)

##Overview

Suggest is a **list of options** for input controls that aids form filling by suggesting the necessary value on the base of already typed text. 
It is based on Webix [list](desktop/list.md) component. 

<img src="desktop/suggest.png">

{{sample 13_form/01_controls/15_suggest_server.html }}

Suggest list can be used with the following components (should be configured separately):

- standard HTML input;
- Webix JS [text](desktop/text.md) field;
- [text editor](desktop/editing.md#text) within a component item. 

Suggest list is already implemented in the following Webix components (but can be customized): 

- [combo](desktop/combo.md) and [richselect](desktop/richselect.md) form controls;
- [combo](desktop/editing.md#combo) and [richselect](desktop/editing.md#richselect) component editors. 


**How does it work?**

A [popup window](desktop/popup.md) with a suggest list control appears each time you try to enter a value into the control or editor: 

- when you **type** something into an HTML input or Webix text and combo control. 
- when you **click** the richselect control;

**Suggest list and Text input**
 
When suggest list is combined with **[text](desktop/text.md)** control (editor) or HTML input 
its values are automatically filtered according to the letters you have already typed. You can select an item from the list to fill the input 
or ignore the suggest list and type you own text. 

**Suggest list and Combo**

When suggest list is combined with **[combo](desktop/combo.md)** control (editor) its values are automatically filtered according to the letters 
you have already typed. You can either select an option fromt he list or type the text to match any of the options. You cannot ignore the suggest list and enter you own text.

**Suggest list and Richselect**

When suggest list is combined with [richselect](desktop/richselect.md) control (editor) a popup appears the moment you click its non-editable input. 
You must obligatory choose some value from the list. 

**Suggest list values can be stored**

- on client side;
- on server side.

Default **timeout** between key pressing and filtering equals to 1ms, still it can be modified by the dedicated property. 

~~~js
{
	view:"suggest",
    data:[..] //or url:"some.php",
    keyPressTimeout:100ms
}
~~~

##Initialization

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

2 . The **same-name property** of JS [text](desktop/text.md) input, [combo](desktop/combo.md) and [richselect](desktop/richselect.md):

~~~js
{view:"text", name:"country", label:"Country", value:"Belarus", suggest:[
		{id:1, value: "Albania"},
		{id:2, value: "Bhutan"},
        ...]
}
~~~

3 . The **same-name property** of JS [combo](desktop/combo.md) and [richselect](desktop/richselect.md) and take the extensive configuration:

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

##Loading data to Suggest list

Normally, a dataset for suggest items contains an array of objects, each of which may have the following properties: 

- **id** - item ID (if not set, will be generated automatically);
- **value** - the property to display in suggest items (if another [template](desktop/advanced_combo.md#changingoptiontemplate) is not set);
- **$empty** - indicates that an item contains not data (blank item);
- any other properties.

###Suggest list with client-side data

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

###Suggest list with server-side data

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


##Suggest list for component editors {#component}

[Component editors](desktop/editing.md) duplicate editing controls yet they are initialized within the component body. 

<img src="desktop/autosuggest.png">

Suggest can be initialized for **combo** and **text** editors. To do this, make the following steps: 

- create a suggest list as **separate view** or define its **configuration** in a JSON object and set options for it:
- create a component, specify **text** [editor type](desktop/editing.md) for it and link to the suggest: 

~~~js
var year_suggest_a = webix.ui({
	view: "suggest",
	data:[...]
});

//or
var year_suggest_a = {
	view: "suggest",
	data:[...]
};

webix.ui({
	view:"datatable",
    columns:[  
        {id:"year", editor:"text", suggest:year_suggest_a}
    ]
});
~~~

{{sample 15_datatable/04_editing/14_autosuggest.html}}

At the same time, you can provide all the logic by API, which allows customizing suggest behaviour: 

- create a suggest list as **separate view** and set options for it:
- link suggest list to the input field of the editor object with the **linkInput** method:
- provide handlers for edit events.

~~~js
var year_suggest_b = webix.ui({
	view: "suggest",
	data:[...]
});

var gridb = webix.ui({
	view:"datatable",
    columns:[  
        {id:"year", editor:"text"}
    ]
});


gridb.attachEvent("onAfterEditStart", function(object){
	if (object.column == "year") { //only for editors in this column
		var editor = this.getEditor(object);
		year_suggest_b.linkInput(editor.getInput());
	}
});

gridb.attachEvent("onAfterEditStop", function(object){
	year_suggest_b.hide();
});
~~~

{{sample 15_datatable/04_editing/14_autosuggest.html}}

{{note
Suggest list can as well be attached to **combo** and **richselect** editors, yet then it looses its status of 'adviser' and selection from it becomes compulsory.
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

{{sample 15_datatable/04_editing/21_advanced_combo.html}}

##Customizing suggest list

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

As well as for a suggest defined as a control/editor property: 

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
Note that an suggest list configuration can be set via either **suggest** or **options** property for  [richselect](desktop/richselect.md), [combo](desktop/combo.md),
[multiselect](desktop/multiselect.md) and [multicombo](desktop/multicombo.md) controls. 
}}

**Where can the customization be useful?**

- desktop/advanced_combo.md
- [Customizing built-in data editors](desktop/editing.md#advancedconfigurationofselecteditors)


##Sizing and positioning

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

Suggest API offers the following variants of popup positioning in relation to the text field it's initialized for: 

- **"bottom"** (default). Doesn't require direct initialization;
- **"top"**;
- **"left"**;
- **"right"**.

Since we speak here about **relative** position, the property to set it has the same name:

~~~js
{ view:"text", suggest:{ data:countries, relative:"left" }}
~~~

{{sample 13_form/01_controls/15_suggest_position.html}}

##Advanced suggest lists

{{pronote
The functionality is available in **Webix Pro** edition only.
}}

Webix offers advanced suggest controls for width extra functionality and greater visual effect:

- **checksuggest** - a suggest control based on Webix [list](desktop/list.md). Features checkboxes that enable multiple choice;
- **multisuggest** - a suggest control based on Webix [list](desktop/list.md) with the ability to select **mupliple items** at a time;
- **gridsuggest** - a suggest control based on Webix [datatable](datatable/index.md);
- **datasuggest** - a suggest control based on Webix [dataview](desktop/dataview.md).

###Checksuggest

<img src="desktop/multiselect.png">

Checksuggest control is used in a number of **PRO** controls. You can find its implementations in: 

- [multiselect form control](desktop/multiselect.md);
- [multicombo form control](desktop/multicombo.md);
- [multiselect datatable filter](datatable/filtering.md#multiselect);
- [multicombo datatable filter](datatable/filtering.md#multiselect);
 
###Multisuggest

<img src="desktop/multiselect_multisuggest.png">

Multisuggest control is used in a [multiselect component editor](desktop/editing.md#multiselect). 

If needed, it can substitute checksuggest for the above-mentioned used cases. See desktop/advanced_combo.md for details.

###Gridsuggest 

<img src="desktop/gridsuggest.png"/>

{{sample 32_thirdparty/13_gridselect.html}}

Gridsuggest can be used with form controls as well as with component editors. More about its configuration can be found in the [related article](desktop/gridsuggest.md).  

###Datasuggest 

<img src="desktop/datasuggest.png"/>

{{sample 32_thirdparty/14_dataselect.html}}

Datasuggest can be used with form controls as well as with component editors. More about its configuration can be found in the [related article](desktop/datasuggest.md).  
