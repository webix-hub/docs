Fieldset
==================

##API Reference

- [Methods, properties and events](api/refs/ui.fieldset.md)
- [Controls Common Functionality](desktop/controls_guide.md)

##Overview

Fieldset is a grouping control based on HTML *< fieldset >* tag. Creates a section with borders to place the controls into it. 

<img src="desktop/form_fieldset.png"/>

##Initialization

Fieldset can be used to neatly put the controls into **layout**:

~~~js
{view:"fieldset", body:{
	rows:[
    	{view:"text", ..}, 
        {view:"button", ..}]
 }
}
~~~

{{sample 13_form/05_extras/02_multiple_fieldsets.html }}

Or, to create a control group within a **form**:

~~~js
{view:"form", elements:[
	{view:"text", ..},
    {view:"fieldset", body:{
    	rows:[
        	{view:"text", ..}, 
        	{view:"datepicker", ..}]}
    }
]} 
~~~

{{sample 13_form/05_extras/01_fieldset.html }}

####Main Properties

- **body** (object) - fieldset body object that contains **rows** or **cols** array with controls;
- **label** (string) - text label of the control group, integrated into border.

