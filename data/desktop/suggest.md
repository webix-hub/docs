Suggest List
=============

Suggest is a **list of options** for input controls that aids form filling by suggesting the necessary value on the base of already typed text. 

Suggest list can be used with the following with:

- Webix JS [text](desktop/controls.md#text) field;
- standard HTML input;
- [combo](desktop/controls.md#combo) and [richselect](desktop/controls.md#richselect) (is used instead of their *options* property);
- **editor object** within an in-component item. 

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


##Suggest List with Client-Side Data

On the client side the list with suggestions can be stored either of [supported formats](desktop/data_types.md). It may be put directly into **data** property (as shown above) or in a variable declared beforehand. 

{{snippet
Suggest List with JSON data
}}
~~~js
var countries = [
		{id:1, value: "Albania"},
		{id:2, value: "Bhutan"},
		...
	];
  
{ view:"text", label:"Country", value:"Belarus", suggest:countries}    
~~~

{{sample 13_form/01_controls/15_suggest_text.html }}

##Suggest List with Server-Side Data

At the same time, data can come from server side. All you need is to specify the script file that will get the data from the database. 

{{snippet
As value of **dataFeed** property of the Suggest component
}}
~~~js
webix.ui({
	view: "suggest",
	input: document.getElementById("country4"),
	dataFeed:"server/data.php"
});
~~~

{{snippet
As value of **suggest** property
}}
~~~js
{ view:"text", name:"country", label:"Contry", value:"Albania", suggest:"server/data.php"}
~~~

{{sample 13_form/01_controls/15_suggest_server.html }}

Suggest list is connected with an input field by **suggest** property included into the **text** constructor. 

##Suggest List with Richselect and Combo {#combo}

Suggest list can substitute **options** property for some controls. In this case suggest comes as property object and features common properties of a UI component: 

~~~js
webix.ui({
	view:"richselect", suggest:{
    	data:[{id:1, value:"One"},
        	  {id:2, value:"Two"}, .. //options list
                ],
        ready: function(){
        	$$("richselect_1").setValue(this.getFirstId()); //defines the initially visible option
        }
    }
});
~~~


{{sample 98_docs/suggest_combo.html}}


{{note
Note that in this case, you must select any value from a suggest list, since it's required by combo and richselect nature. 
}}

##Suggest List for In-Component Editors {#component}

[Component editors](desktop/editing.md) duplicate editing controls yet they are inited within the component body. 

<img src="desktop/autosuggest.png">

Suggest can be inited for **combo** and **text** editors. To do this, make the following steps: 

- create a suggest list as **separate view** and populate it with options;

~~~js
var year_suggest = webix.ui({
		view: "suggest",
		data:...
});
~~~

- create a component and specify the needed editor type for it: 

~~~js
webix.ui({
	view:"datatable",
    columns:
    	[  //for text
        	{id:"year", editor:"text"}
           //for combo	
            {id:"year", editor:"combo", suggest:year_suggest}
        ]

});
~~~

{{sample 15_datatable/04_editing/15_combo.html}}

- (only for **text**) link suggest list to the input field of the editor object with the **linkInput** method:

~~~js
grida.attachEvent("onAfterEditStart", function(object) {
		if (object.column == "year") { //only for editors in this column
			var editor = this.getEditor(object);
			year_suggest.linkInput(editor.getInput());
		}
});
~~~

{{sample 15_datatable/04_editing/14_autosuggest.html}}

##Positioning Suggest List

Suggest API offers the following variants of popup window positioning in relation to the text field it's inited for: 

- **"bottom"** (defualt). Doesn't require direct initialization;
- **"top"**
- **"left"**
- **"right"**

Since we speak here about **relative** position, the property to set it has the same name:

~~~js
{ view:"text", suggest:{data:countries} },
{ view:"text", suggest:{ data:countries, relative:"left" }}
~~~

{{sample 13_form/01_controls/15_suggest_position.html}}

###API Reference 

[Methods, properties and Events](api/refs/ui.suggest.md)