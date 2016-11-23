Controls Guide
=============

Controls are the most important components for [event handling](desktop/event_handling.md) since they enable interaction with users. They are used separately as well as can be nested into [toolbar](desktop/toolbar.md), 
[form](desktop/form.md), and other [components](desktop/components.md). All ui-related controls inherit from **input**. 

##List of Available Controls

desktop/button.md, desktop/checkbox.md, desktop/colorpicker.md, desktop/combo.md, desktop/counter.md, desktop/datepicker.md, desktop/daterangepicker.md,
desktop/icon.md, desktop/label.md, desktop/multicombo.md, desktop/multiselect.md, desktop/multitext.md, desktop/radio.md, desktop/rangeslider.md
desktop/richselect.md, desktop/richtext.md, desktop/search.md, desktop/select.md, desktop/segmented.md, desktop/slider.md, <br>
desktop/suggest.md, desktop/tabbar.md, desktop/text.md, desktop/textarea.md, desktop/toggle.md.

Form controls share a lot of features that work the same way with most of them or with very little difference. 

##Control Initialization

Control constructor includes its name and properties defining its look-and-feel and behavior. 

Some properties duplicate HTML attributes, some are typically Webix control properties. In addition, you can set necessary HTML attributes to your control within **attributes** object property. 

~~~js
{view:"text", width:200, click:"", attributes:{ maxlength:10 }...}
~~~

##Defining Text Label 

The **label** (string) property sets a text label for a control, a string placed by the control.

- underwrites the controls and explains its  purpose;
- label absence is defined as *label:"null"* or by omitting this property in the control constructor;
- horizontal position of the label is defined by the **labelAlign** (string) property. Its possible values are: 
	
    - "left"(default);
    - "right" (except for button and toggle that takes only left alignment);
- vertical position of the label is defined by the **labelPosition** (string). The only possible value is "top"; 
- width of the label is defined by the **labelWidth** property;
- text of the button is set by **value** property instead of label. 

Please, don't mix it with a separate view [label](desktop/label.md).

{{sample 13_form/02_api/03_label_position.html}}

##Defining Special Modes

Any control can be set **disabled** and **readonly** with the help of dedicated properties:

~~~js
elements:[
	{view:"text", readonly:true},
	{view:"datepicker", disabled:true}
]    
~~~

##Control Positioning 

Here we make use of the **align** (string) property that defines horizontal position of the control and its label with respect to the parent container (e.g. [form](desktop/form.md)):

- "right";
- "left" (default);
- "center". 

{{sample 13_form/02_api/04_input_align.html}}

##Setting Dimensions 

Each time control is initialized, space is reserved for it. It either equals to parent (form, toolbar) dimensions or is set as control **width**. 

<img src="desktop/control_width.png">

In case several controls are in the same row/column, the available space is distributed equally among them. 

Total **width** of the control includes **inputWidth** and, therefore, **labelWidth** (study the picture). If you set width less than the combination of them, a part of the control won't be visible. 
At the same time, you can make width bigger - then, spacing will appear.  

The following sizing options are possible:

- **height/width** (number) - dimensions of space reserved for this control including its label;
- **maxHeight/maxWidth** - maximum dimensions of the whole control. During resizing, the control can't be bigger, but can be smaller;
- **minHeight/minWidth** - minimal dimensions of the whole control. During resizing, the control can't be smaller, but grow bigger;
- **inputHeight/inputWidth** (number) - dimensions of the input area/ button body;
- **optionWidth** (number) - sets the width of an option (segment of tab) for segmented and tabbar. Hence, for such controls **inputWidth = optionWidth * N options**. If this value is
smaller than an **width**, a part of the control will disappear;
- **labelWidth** - width of the text label by the control. It can't be bigger than **inputWidth** and, thereby, **width**. If it is, the control will be incorrectly displayed. By default, it features static width of 106 px.
- **gravity** - relative sizing functor for controls placed in the same row/column.  

~~~js
//text2 is 3 times bigger than text1
rows:[
	{view:"text",	name:"text1", gravity:1},
 	{view:"text", name:"text2", gravity:3}
]    
~~~
 
##Attaching Functions

Controls can trigger any function for any component in the application. Study [Event Handling](desktop/event_handling.md) for details.

Inner events of controls include:

- **clicking**; 
- **changing their state** (selection made, switching to another tab, adding new data into inputs)

Two major possibilities here include: 

1 . Attaching event inside the control constructor. 

With the **click** property. It equals to the "onItemClick" event. 

~~~js
{view:"button", click:"$$('my_form').save()" }
~~~

With the **on** property that allows attaching custom handlers to specified inner events of the control:

~~~js
//clicking
{view:"button", on:{
	'onItemClick': function(){...}
    }
}
    
//state changing
{view:"text",  on:{'onChange': function(){... }
	}
}
~~~

2 . The same using the **attachEvent()** method.

~~~js
//clicking
$$("my_button").attachEvent("onItemClick", function(){.... });

//state changing 
$$("my_text").attachEvent("onChange", function(){.....});
~~~

The implementation of an **onChange(**) function is described in the [Form documentation](desktop/form.md).

##Automatic Showing and Enabling of Related Form Fields {#related}

Each form field can have one **related** field defined by its [relatedView](api/ui.text_relatedview_config.md) property. 

This field can react on changes in master field and change it's state: 

- from **hidden** to **visible** and vice versa, 
- from **disabled** to **enabled** and vice versa. 

This behavior is also defined by the master field with the [relatedAction](api/ui.text_relatedaction_config.md) property:

{{snippet
Enabling a form field by changes in another
}}
~~~js
elements:[
	{view:"text", id:"master", relatedView:"slave", relatedAction:"enable"},
    {view:"text", id:"slave", disabled:true}
]
~~~

The following conditions should be observed:

- the functionality allows for watching various value changes (*empty/not empty*, *selected/not selected*, *checked/unchecked*) for different controls;
- **relatedView** property takes ID of the needed control as parameter (if you don't define ID manually, it will be created automatically and can be derived as *view.config.id*);
- **relatedAction** offers two possibilities for now:
	- "enable";
    - "show";
- Slave field may have initial values to match with master relatedAction - *hidden:true* for **"show"** and *disabled:true* for **"enable"**.

{{sample 13_form/02_api/11_dynamic.html}}

##Defining Initial Values

**Single-value controls**

For such controls as [text](desktop/text.md) and [textarea](desktop/textarea.md) **value** property isn't normally set beforehand, as they are intended for user filling. 

So these exist different variants of value treating:

- **omit** this property at all; 
- make the property **empty** ( *{view:"text", value:""}* );
- set **default value** that can be deleted or changed by users( *{view:"text", value:"My text"}* );
- still it's better to use **placeholder** (the default value for the input, a hint for user. Disappears as you start typing.);
- for two-state controls like [checkbox](desktop/checkbox.md), [radio](desktop/radio.md) and [toggle](desktop/toggle.md) possible values are:
	- *true* or 1 - for a 'checked' state;
	- *false* or 0 - for 'unchecked' state. 
- for [counter](desktop/counter.md), [slider](desktop/slider.md) and [range slider](desktop/rangeslider.md) initial value is normally set as a **possible number**
or the one in the middle of the predefined range.
    
**Multiple-value controls**

Such controls fall into two groups: 

- those presupposing the choice from a pull-down or popup list of **predefined values**  ([select](desktop/select.md), [combo](desktop/combo.md), [multicombo](desktop/multicombo.md),
[richselect](desktop/richselect.md) and [multiselect](desktop/multiselect.md));
- those offering the choice between tabs (segments) of integral buttons, namely [tabbar](desktop/tabbar.md) and [segmented](desktop/segmented.md). 

These values are set within **options** property either as an array or as a collections of objects.

{{snippet
Array of options for Combo box
}}
~~~js
{ view:"combo", id:'field_m', label: 'Combo', value:"One", yCount:"3", 
    options:["One", "Two", "Three"]}
~~~

The initial value is specified by the **value** property and corresponds to any value from the predefined ones: 

{{snippet
Collection of objects
}}
~~~js
 { view:"radio", label:"Branch", value:1,options:[
     { value:"Master",  id:1 }, 
     { value:"Branch",  id:2 }]
}                
                
~~~

Th initial value can be set  as a **text** value of any option:

~~~js
 { view:"radio", label:"Branch", text:"Master",options:[
     { value:"Master",  id:1 }, 
     { value:"Branch",  id:2 }]
}                
                
~~~

If both **text** and **value** properties are defined, the **text** one will be ignored. 

{{sample 13_form/01_controls/04_radio.html }}

**Server-side options for multiple-value controls**

Such controls as [select](desktop/select.md), [combo](desktop/combo.md), [multicombo](desktop/multicombo.md), [richselect](desktop/richselect.md) and [multiselect](desktop/multiselect.md)
can get values from the server side. The script that returns the needed data, can be defined directly in the **options** property: 

~~~js
view:"combo", options:"server/data.json"
~~~

{{sample 13_form/01_controls/11_combo_advanced.html}}


Note that **the getValue()** method will return the **ID** of the currently selected tab/segment/option. 

##Setting Values Dynamically


Values can be as well set after initialization with the help of the dedicated **setValue()** method for a single control or **setValues()** to set the values for controls within the [form](desktop/form.md). 
Find the latter in the related [article](desktop/form_tasks.md).

Both methods take the needed value (or object with 'ID-value' pair(s)) as parameter and are called from the necessary control or the form where the controls are nested: 

~~~js
$$('text1').setValue('Anna'); //for a single text field with "text1" ID

$$('form1').setValues({ //value for 2 text field in the form
	text1:"Anna",  
    text2:"Brown"
});
~~~

Values of two-state controls ([checkbox](desktop/checkbox.md) and [radio](desktop/radio.md)) can be changed in different ways:

- **setValue()** - with either *0 (false)* to uncheck or *1 (true)* to check;
- **toggle()** - to change the initial value (the [toggle](desktop/toggle.md) button as well takes this method);

~~~js
$$("mycheckbox").toggle(); //-> if checked - becomes unchecked and vice versa
~~~

##Getting Values 

Within the library we have two methods for getting values: 

- **getValue()** - for a component that has one value (any control);
- **getValues()** - for a component that stores a number of controls ([form](desktop/form.md)  / [htmlform](desktop/htmlform.md))

In case you want to get the value of a separate control, call the **getValue** method from it:

~~~js
{view:"select", id:"my_sel", value:1, options:[
	{ id:1, value:"Master" },
	{ id:2, value:"Release" } 
]}
 
var value = $$("my_sel").getValue(); //- > returns 1
~~~

In case controls are embedded into a form, we call the **getValues()** method from this form while specifying **name** or **ID** of the dedicated control.

~~~js
webix.ui({
	view:"form", elements:[
    	{view:"text", id:"title", value:""},
        ...//other controls
    ]
})

var title = $$("myform").getValues().title, //-> returns value of text input
~~~

**Control Value** can be different: 

- **text string** in the [text](desktop/text.md) or [textarea](desktop/textarea.md) control;
- **state** (boolean) of two-state controls ([checkbox](desktop/checkbox.md), [radio](desktop/radio.md) and [toggle](desktop/toggle.md));
- **ID of selected tab** of integral buttons ([tabbar](desktop/tabbar.md) and [segmented](desktop/segmented.md));
- **ID of selected option** of selection controls ([select](desktop/select.md), [combo](desktop/combo.md) and [richselect](desktop/richselect.md));
- **string** with **selected option IDs** of a [multiselect](desktop/multiselect.md) and [multicombo](desktop/multicombo.md) control.
- **text** on the [button](desktop/button.md);
- **selected date** or **color item** ([datepicker](desktop/datepicker.md), [colorpicker](desktop/colorpicker.md)).

In case the **getValue()** method returns object (e.g. date object) and you'd like to see the string result at once, you can include the **stringResult** property into the control constructor:

~~~js
webix.ui({
	view:"datepicker",
    stringResult:true, // false by default
    ..config
});
~~~

##Visibility of Controls

All controls can be shown and hidden on demand:

- one by one applying [show()](api/ui.baseview_show.md) and [hide()](api/ui.baseview_hide.md) methods to each of the needed controls or setting [hidden](api/ui.baseview_hidden_config.md) property. 
- in groups by implementing **batches** functionality. [More info](desktop/visibility.md).

For **hidden inputs** within the form the library offer [peculiar API](desktop/hidden_inputs.md) that actually eliminates the need of creating hidden fields. Here you manipulate with values only. 

##Styling 

Controls can be styled to your taste with the help of [CSS Image Maps](desktop/styling.md#css).

##Common Configuration within Form and Toolbar

If you have several instances of one and the same control within a form or a toolbar (a lot of text fields in the form or several buttons on a toolbar) and want them to have the same properties, 
you can define these properties only once in an **elementsConfig** object. 

Find more info in the [corresponding article](desktop/common_config.md) of our documentation. 

@index:
- desktop/hidden_inputs.md
- desktop/common_config.md
- desktop/advanced_combo.md

@complexity:2