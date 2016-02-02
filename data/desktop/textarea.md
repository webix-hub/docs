Textarea
=========================

##API Reference

- [Methods, properties and events](api/refs/ui.textarea.md)
- [Shared functionality](desktop/controls_guide.md)

##Overview

Ui-related textarea control is a multi-line input field with a label.

<img src="desktop/textarea.png" />

##Initialization

~~~js
{ view:"textarea", label:"Note", labelAlign:"right", height:200, value: "type here" }
~~~

{{editor http://webix.com/snippet/464d0c91	Multiline Text Input('textarea')}}

####Main properties

- **label** (string) - text label of a control. It can be customized by:
	- **labelAlign** (string) - label alignment towards its container. Possible values are "left" and "right".  In any way, it's placed left to the control; 
    - **labelWidth** (number) - width of the label container; 
- **width, height** (integer) - defines the dimension of the text field;
- **labelAligh** (string) - sets the position of a text label;
- **value** (string) - sets the initial text in the field (replaced by input text later)
- **placeholder** (string) - the initial text in the textarea field, disappears as you start typing in it;
- **attributes** (object) - hash of properties. See [text](desktop/text.md) description for details. 

 