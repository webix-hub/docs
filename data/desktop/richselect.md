RichSelect
====================

##API Reference

- [Methods, properties and events](api/refs/ui.richselect.md) 
- [Shared functionality](desktop/controls_guide.md)

##Overview

Ui-related richselect is a non-editable [combo-box](desktop/combo.md). 

<img src="desktop/richselect.png"/>


Visually, the **richselect** control consists of a [text input](desktop/text.md) and [popup window](desktop/popup.md) that contains a standard [list](desktop/list.md) of options in its body. 

Another possibility to create a component with a similar functionality is [attaching a suggest list to a text field](desktop/suggest.md), but in this case, text field will be editable.

##Initialization

~~~js
//full form
{
	view:"richselect",
	id:"list2", 
    label:"richselect", 
    value:1, 
    yCount:"3", 
    options:[ 
		{id:1, value:"One"}, // the initially selected item
		{id:2, value:"Two"}, 
		{id:3, value:"Three"}
    ]
}
...   
//short  form for options array
{view:"richselect", options:["One", "Two", "Three"]}

//server options
{ view:"richselect", options:"server/data.json"}
~~~

{{sample 13_form/01_controls/11_richselect.html }}


####Main Properties

- **value** (string, number) 
	- within **options** array it sets text value for selectable items;
 	- within richselect constructor it defines the initially selected item of the control(**ID** in case of a long form, **text value** in case of a short form of initialization);
- **placeholder** (string) - defines placeholder for richselect input. The control should be initialized without an initial value;       
- **label** (string) - text label of a control. It can be customized by:
	- **labelAlign** (string) - label alignment towards its container. Possible values are "left" and "right".  In any way, it's placed left to the control; 
    - **labelWidth** (number) - width of the label container; 
- **options** (array, object, string) - sets the options to choose from in a long or short form. [Details](desktop/controls_guide.md#defininginitialvalues).

##Configuring Suggest List

Richselect control can be customized in a number of ways, e.g.: 

- options can be defined dynamically;
- options can be loaded from server side;
- template can be changed..

To learn more, go to [Advanced Settings of Popup Selectors](desktop/advanced_combo.md) article. 

##Accessing Suggest List

Richselect API allows for getting popup and list objects for further usage: 

~~~js
var popup = richselect.getPopup();
var list = popup.getBody();
//or
var list = popup.getList();
~~~

##Pro Extensions for Richselect 

In the **Webix Pro** edition the control can be extended to show either a **dataview** or **datatable** in the popup:

- desktop/datasuggest.md#usingdatasuggestforformcontrols
- desktop/gridsuggest.md#usinggridsuggestforformcontrols

##Getting Current Value

In case of a full initialization form, the **getValue()** method for richselect will return ID of selected option rather than text. Use **getText()** method to get text value.  

~~~js
$$("field_t").getValue(); // ->returns 1

$$("field_t").getText() // -> returns "One"
~~~

@spellcheck:usingdatasuggestforformcontrols,usinggridsuggestforformcontrols 