Select
=====================

##API Reference

- [Methods, properties and events](api/refs/ui.select.md) 
- [Shared functionality](desktop/controls_guide.md)

##Overview

Select is a control that allows selection from several items. It is based on HTML < select > tag and looks like a dropdown list. 

<img src="desktop/select_control.png" />

##Initialization

~~~js
// full form
{view:"select", label:"Branch", value:1, options:[
	{id:1, value:"Master" }, // the initially selected value
	{id:2, value:"Release" }
  ], labelAlign:"right" 
}

// short form 
{ view:"select", options:["Master", "Release"]}

// server-side options
{ view:"select", options:"server/data.json"}
~~~

{{sample 13_form/01_controls/02_select.html }}

####Main properties

- **label** (string) - text label of a control. It can be customized by:
	- **labelAlign** (string) - label alignment towards its container. Possible values are "left" and "right".  In any way, it's placed left to the control; 
    - **labelWidth** (number) - width of the label container; 
- **options** (array, object, string) - defines a set of items to select from;
- **value** (string, number) 
	- within **options** array it sets text values for select items;
 	- within Select constructor it defines the initially selected item of the control (**option ID** in case of a full form, **option text** in case of a long form);

@metadescr:  Select is a control that allows selection from several items. It is based on HTML tag and looks like a dropdown list. Initialization js full form view select , label Branch