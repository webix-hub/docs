Text
=======================

##API Reference

- [Methods, properties and events](api/refs/ui.text.md) 
- [Shared functionality](desktop/controls_guide.md)

##Overview

Ui-related text control is a one-line input field with a label.

<img src="desktop/text.png"/>

##Initialization

~~~js
{view:"text", value:'dummy@email.com', label:"Email", labelAlign:'right'},
{view:"text", type:'password', value:'123pass', label:"Password", labelAlign:'right'}
~~~

{{editor http://webix.com/snippet/bade77cb	Text Input ('text')}}

####Main properties

- **value** (string, integer) - the initial value for a text field, can be editable or readonly on your choice;
- **label** (string) - text label of a control. It can be customized by:
	- **labelAlign** (string) - label alignment towards its container. Possible values are "left" and "right".  In any way, it's placed left to the control; 
    - **labelWidth** (number) - width of the label container; 
    - **labelPosition** (string) - defines label position related to the input field. The only possible value is "top";
- **type** (string)- type of a text field, can be  either "text" by default, or "password" or "email". Type is vital for [HTML5 input data validation](desktop/data_validation.md#html5).
- **placeholder** (string) - the initial text in the text field, disappears as you start typing in it;
- **suggest** (array, string) - collection of suggest values, or the ID of an attached [suggest list](desktop/suggest.md) with these values. 

##Using HTML Attributes

At the same time, "text" properties can be set via an **attributes** object containing properties that coincide with HTML input tag properties. The object is used for [HTML5 data validation](desktop/data_validation.md#html5). 

- **attributes** (object)
	- **maxlength** (number)  - the maximum quantity of symbols that can be typed into the text field; 
    - **required** (boolean) - indicates whether this field must be filled before the form can be submitted. False by default;
    - **title** (string) -  a prompt message that appears on pointing cursor over the field. 
    
The same is true for [textarea](desktop/textarea.md).    
