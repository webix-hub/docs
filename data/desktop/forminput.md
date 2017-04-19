FormInput
==========

##API Reference

- [Methods, properties and events](api/refs/ui.forminput.md)
- [Controls Common Functionality](desktop/controls_guide.md)

##Overview

FormInput is a wrapping control intended for inserting into Form more complex wigdets (Grid, Chart, Editors, etc.), besides controls. It inherits from desktop/fieldset.md.

This control renders a section with a label to place a widget or a control into it. It allows making all Form elements to look alike thus creating a whole and attractive UI. 

<img src="desktop/form_forminput.png"/>


Initialization
--------------------

To render a FormInput inside of the Form, use the following configuration:

~~~js
// a widget to be transformed into a form input
var list1 = { 
    view:"dbllist", 
    data:[
        {id:"1", value:"Guest"},
        {id:"2", value:"Member"},
        {id:"3", value:"Moderator"}
    ]
};

// form input initialization
webix.ui({
 	view:"forminput", 
    name:"access", 
    body:list1, 
    labelWidth: 140,
    labelAlign:"right", 
    label:"Access levels" 
});
~~~

{{sample 13_form/01_controls/25_dbllist.html}}

**Main Configuration Properties**

- **body** - (*object*) FormInput body object that contains a control or a widget
- **label** - (*string*) text label of the wrapped widget used as a Form control
- **labelAlign** - (*string*) the alignment of a label towards its container, *"left"* by default
- **labelWidth** - (*number*) the width of the label, 80 by default

