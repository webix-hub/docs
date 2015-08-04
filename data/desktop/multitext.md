Multitext 
==========

{{pronote
The control is available only in **Webix Pro** edition.
}}

##API Reference

- [Methods, properties and events](api/refs/ui.multitext.md)
- [Shared functionality](desktop/controls_guide.md)

##Overview

UI-related multitext is a dynamic control based on standard Webix [text](desktop/text.md) input. It offers the possibility to add and delete additional fields on the go. 

<img src="desktop/multitext.png"/>

##Initialization

~~~js
{ view:"multitext", id:"multi", value:'dummy@email.com, mirror@email.com', label:"Email" }
~~~

{{sample 60_pro/02_form/01_multitext.html}}

####Main properties

- **value** (string) - the initial value to display in the input field. The string parts separated by a comma (",") will be put to additional input fields);  
- **label** (string) - text label of a control. It can be customized by:
	- **labelAlign** (string) - label alignment towards its container. Possible values are "left" and "right".  In any way, it's placed left to the control; 
    - **labelWidth** (number) - width of the label container; 
    - **labelPosition** (string) - defines label position related to the input field. The only possible value is "top";
- **placeholder** (string) - the initial text in the text field, disappears as you start typing in it;
- **icon** (string) - the control's icon. 

####Field IDs

Each field of a multitext control features its own ID. It can be either a given (for the basic field) or an auto-generated one. 
All the methods of a multitext object can be applied to any field object. 

##Adding and rRemoving Fields

Multitext API allows [adding](api/ui.multitext_addsection.md) and [removing](api/ui.multitext_removesection.md) additional fields dynamically: 

~~~js
var newFieldId = $$("multi").addSection();

//remove specific field
$$("multi").remove(newFieldId);
//remove all the additional fields
$$("multi").remove();
~~~

Notes:

- Only additional fields can be removed, basic one always remains. 
- The methods can be called from any multitext object from the group. 

##Setting and Getting Values

Multitext features an extended API for **setting** and **getting** its **values**. 

- [setValue](api/link/ui.multitext_setvalue.md) and [getValue](api/link/ui.multitext_getvalue.md) methods for working with the value of the whole control;
- [setValueHere](api/ui.multitext_setvaluehere.md) and [getValueHere](api/ui.multitext_getvaluehere.md) methods for for working with the value of the first (basic) field. 
