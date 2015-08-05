Multicombo
============

{{pronote
The control is available only in **Webix Pro** edition.
}}

##API Reference

- [Methods, properties and events](api/refs/ui.multicombo.md)
- [Shared functionality](desktop/controls_guide.md)

##Overview

Multicombo is an editable control that allows for choosing several options at a time from a dedicated popup list, 
the [checksuggest](api/refs/ui.checksuggest.md). 

<img src="desktop/multicombo_message.png">

Multicombo inherits from a standard [combo](desktop/combo.md) control and has the following features:

- Each option is equipped with a checkbox;
- Each time you enter symbols in the input field the list of options is filtered;
- To select an option, check it or click the corresponding list item. A selected option will be added to the input;
- To remove an option from selction, click either the "cross" sign or use the "backspace" key in the input filed or uncheck the option in the list. 

##Initialization

~~~js
{ view:"multicombo", label:"To", value:"2,3,4,13", suggest: "data/names.js"}
~~~

{{sample 60_pro/02_form/06_multicombo.html}}

**Main properties**

- **label** (string) - specifies text label of a control;
- **labelPosition** (string) - sets the position of the label in relation to the control container;
- **value** (array/string) - defines the initially selected items of the control;
- **separator** (string) - defines a delimiter for separating options in a multicombo, comma by default;
- **options** or **suggest** (array, object) - defines a set of items to select from, or the datasource, or [advanced popup configuration](desktop/advanced_combo.md);
- **optionWidth** (number) - defines the width of a popup list. By default, it is adjusted to the control width. 	

##Configuring Suggest List

You can read about advanced configuration options for popup selectors in the [corrresponding documentation article](desktop/advanced_combo.md).

##Accessing Suggest List

Multiselect API allows getting popup and list objects for further usage: 

~~~js
var popup = multicombo.getPopup();
var list = popup.getBody();
//or
var list = popup.getList();
~~~

@edition:pro