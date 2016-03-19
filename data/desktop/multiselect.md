Multiselect
=====================

{{pronote The control is available only in **Webix Pro** edition. }}

##API Reference

- [Methods, properties and events](api/refs/ui.multiselect.md)
- [Shared functionality](desktop/controls_guide.md)

##Overview

UI-related multiselect is a non-editable select control that allows for selecting multiple options at a time while displaying them in the dedicated input field. 

<img src="desktop/multiselect.png"/>

Multiselect inherits from a standard [richselect](desktop/richselect.md) and has the following features:

- Each option is equipped with a checkbox (can be configured, see below);
- To select an option, check it or click the corresponding list item. A selected option will be added to the input;
- To remove an option from selection, click either the "cross" sign or use the "backspace" key in the input filed or uncheck it in the list.

##Initialization

~~~js
{ view:"multiselect", id:"multi", label:"Participant", options:[
	{ id:1, value:"Alex Brown" },
	{ id:2, value:"Dan Simons" },
	{ ... }				 
], value:"1,3" }
~~~

{{sample 60_pro/02_form/02_multiselect.html}}

####Main properties

- **value** (string) - the initial value to display in the input field, its ID. The string can be separated by a comma (",") to define multiple values;  
- **label** (string) - text label of a control. It can be customized by:
	- **labelAlign** (string) - label alignment towards its container. Possible values are "left" and "right".  In any way, it's placed left to the control; 
    - **labelWidth** (number) - width of the label container; 
    - **labelPosition** (string) - defines label position related to the input field. The only possible value is "top";
- **placeholder** (string) - the initial text in the text field, disappears as you start typing in it;
- **options** or **suggest** (array, object) - defines a set of items to select from, or the datasource, or [advanced popup configuration](desktop/advanced_combo.md);
- **optionWidth** (number) - defines the width of a popup list. By default, it is adjusted to the control width;
- **button** (boolean) - if set to true, defines that multicombo's popup will be closed by click on the Select button. The details on the button's configuration are given [below](#configuringsuggestlist).

##Configuring Suggest List

Webix API allows for using another suggest list for the multicombo, the [multisuggest](api/refs/ui.multisuggest.md): 

<img src="desktop/multiselect_multisuggest.png"/>

~~~js
webix.ui({
  view:"multicombo", suggest:{
    view:"multisuggest", data:[
      {id:1, value:"one"},
      {id:2, value:"two"}
      ]
    }
});
~~~

The control's popup is supplied with a "select" button out of box, but it can be changed in two ways:

- changing the [buttonText](api/ui.multisuggest_buttontext_config.md) property for a particular multisuggest list:

~~~js
{view:"multiselect", label:"Participant",options:{
     buttonText:"Done",
     data:[]
}}
~~~

- modify the **locale** to change button text for all the multisuggests in the application (if other is not stated by **buttonText**, as shown above): 

~~~js
webix.i18n.controls.select = "Done";
webix.i18n.setLocale(); //apply the locale
~~~

Then all the multiselect instances in the app will be supplied with the "Done" word.

You can read more about advanced configuration options for popup selectors in the [corresponding documentation article](desktop/advanced_combo.md).

##Accessing Suggest List

Multiselect API allows getting a popup object for further working: 

~~~js
multiselect.getPopup().getBody();
//or
multiselect.getPopup().getList();
~~~

If you use multisuggest, then its constituent parts (list and button) are accessed as:

~~~js
//button object
multiselect.getPopup().getButton();
//list object
multiselect.getPopup().getList();
~~~

@edition:pro
