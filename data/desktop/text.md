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
{view:"text", value:'dummy@email.com', label:"Email", inputAlign:"right", 
	labelAlign:"right"},
{view:"text", type:'password', value:'123pass', label:"Password", inputAlign:"right", 
	labelAlign:"right"}
~~~

{{sample 13_form/01_controls/01_text.html }}

####Main properties

- **value** (string, integer) - the initial value for a text field, can be editable or readonly on your choice.
- **label** (string) - text label of a control. It can be customized by:
	- **labelAlign** (string) - label alignment towards its container. Possible values are "left" and "right".  In any way, it's placed left to the control; 
    - **labelWidth** (number) - width of the label container; 
    - **labelPosition** (string) - defines label position related to the input field. The only possible value is "top".
- **inputAlign** (string) - input alignment towards its container. Possible values are "left" and "right". An input is left-aligned by default.
- **type** (string)- type of a text field, can be either "text" by default, or "password" or "email". Type is vital for [HTML5 input data validation](desktop/data_validation.md#html5).
- **placeholder** (string) - the initial text in the text field, disappears as you start typing in it.
- **suggest** (array, string) - collection of suggest values, or the ID of an attached [suggest list](desktop/suggest.md) with these values.
- **pattern** - (object) - a formatting pattern applied to a text input, contains two properties:
	- **mask** - (string) - a string that defines the format of entered value, consist of "#" signs
    - **allow** - (object) - a set of allowable characters for the input

##Using HTML Attributes

At the same time, "text" properties can be set via an **attributes** object containing properties that coincide with HTML input tag properties. The object is used for [HTML5 data validation](desktop/data_validation.md#html5). 

- **attributes** (object)
	- **maxlength** (number)  - the maximum quantity of symbols that can be typed into the text field; 
    - **required** (boolean) - indicates whether this field must be filled before the form can be submitted. False by default;
    - **title** (string) -  a prompt message that appears on pointing cursor over the field. 
    
The same is true for [textarea](desktop/textarea.md).    

##Formatted Text Inputs

You can specify the pattern of a text input formatting. The rules of text formatting are defined in the **webix.patterns** object.
It contains a collection of patterns - "property-value" pairs, where *property* is the rule name and *value* is an object with two properties:

- mask - a string expression consisting of the "#" signs that defines in which format data should be entered
- allow - a set of characters that a user is allowed to enter into the field

There are three predefined patterns for text formatting:

- phone - defines the format of entering a phone number
- card - sets the format of entering a credit card number
- date - specifies the format of entering a date

~~~js
webix.patterns = {
	phone:{ mask:"+### (##) ###-##-##", allow:/[0-9]/g },
	card: { mask:"#### #### #### ####", allow:/[0-9]/g },
	date: { mask:"####-##-## ##:##", allow:/[0-9]/g }
};
~~~

###Setting a custom formatting pattern

Besides using preset patterns, you can create your own pattern. For this, follow one of the ways described below:

1 . Redefine a preset pattern or create a new one through the *webix.patterns* class:

~~~js
webix.patterns.phone = {
	mask:"#### ### #####", allow:/[0-9]/g 
};
~~~

2 . Set a new text input and define a pattern object with the *mask* and *allow* properties:

~~~js
{ 
	view:"text", 
  	name:"custom", 
    label:"Custom ", 
    pattern:{ mask:"###-## ########", allow:/\w/g}
}
~~~

3 . Set a new text input and define a pattern as a string. The "allow" rule will take the default value.  

~~~js
{ view:"text", name:"custom", label:"Custom 1", pattern:"###-## ########"}
~~~

###Getting the formatted values

To get values from a text input that has a formatting pattern set in its node, you can make use of the *getText()* method.
For example, there's a form with a text input for entering a phone number:

~~~js
webix.ui({
	view:"form",
	elements:[
		{ 
        	view:"text", 
            name:"phone", 
            label:"Phone number", 
            pattern:webix.patterns.phone
        }
	]
});					
~~~

To get the value of the text input from the above form, you need to do the following:

~~~js
var value = {
	phone:form.elements.phone.getText();
}
~~~

{{sample 60_pro/02_form/09_formatted_input.html}}


###Formatted Text Inputs Validation

When a text input is initialized, a rule for its formatting is generated automatically. Later on it's used for validating data in this input.

The rule checks whether the length of the formatted value complies with the mask and whether it contains only allowable characters.

~~~js
webix.ui({
	view:"form", 
	elements:[
		{ view:"text", name:"phone",label:"Phone number", pattern:webix.patterns.phone},
		{ view:"text", name:"card", label:"Credit card", pattern:webix.patterns.card},
		{ view:"text", name:"date", label:"Date", pattern:webix.patterns.date},
		{ margin:5, cols:[
			{ view:"button", value:"Validate all", click:function(){
				this.getFormView().validate();
			}},
			{ view:"button", value:"Clear validation", click:function(){
				this.getFormView().clearValidation();
			}}
		]}
	]
});
~~~

So, in general, validation of these inputs is carried out in the same way as common desktop/data_validation.md. 

However, if you specify some [validation rule](desktop/data_validation.md#validationrules) for an input, using the *validate* property, like 

~~~js
{view:"text", validate:webix.rules.isNumber}
~~~

it will be applied instead of the generated one.

{{sample 60_pro/02_form/10_formatted_inputs_validation.html}}