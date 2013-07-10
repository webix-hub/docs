Form
===============
###Overview

Any form is a means of getting information from users. It contains input fields and select components like checkboxes,
radiobuttons. etc. alongside with submit/cancel buttons depending on the situation. Find them all in our [Controls Guide](desktop/controls.md).

Ui-related form inherits from [view](desktop/view.md). It resembles [layout](desktop/layout.md) very much as it is divided into columns and rows where controls are put. 

- **columns** - an array of horizontally arranged controls and control groups;
- **rows** -  an array of vertically arranged controls and control groups;
- **elements** - the form's specific property, an array of vertically arranged controls and control groups;

<img  src="desktop/basic_form.png"/>

{{sample 13_form/02_api/01_basic.html }}


###Initialization

{{snippet
Login form
}}
~~~js
webix.ui({
	view:"form", 
    id:"log_form",
  	width:300,
	elements:[
		{ view:"text", label:"Email"},
		{ view:"text", label:"Password"},
		{ margin:5, cols:[
					{ view:"button", value:"Login" , type:"form" },
					{ view:"button", value:"Cancel" }
					]}
		]
	});
~~~

{{note
There exists a possibility to specify [common configuration](desktop/common_config.md) for all controls included in this or that form.
}}

##Grouping Controls in Form

###Dividing form into sections

Section within a form are set in the following ways:

- Adding **headers** with **section** type before control arrays;
- Dividing a form into **fieldsets**.

**Sections**

Form elements are placed into different **row arrays** where the first row is a **section** header. Its template define text value of the header:

~~~js
{view:"form", elements: [
	{ rows:[ 
		{ template:"Alpha fields", type:"section"},
		{ view:"text", label:"Alpha 1", value:'' }]
    },
	{ rows:[ 
		{ template:"Beta fields", type:"section"},
		{ view:"text", label:"Beta 1", value:'' }]
    }
]} 
~~~

<img src="desktop/form_sections.png">

{{sample 13_form/01_controls/18_sections.html}}

**Fieldsets**

[Fieldset](desktop/controls.md#fieldset) is a collection of controls surrounded by a border from all the sides. Webix fieldset features text **label** and **body** where **rows** or **cols** array of controls are stored:

~~~js
{view:"form", elements:[
	{ view:"fieldset", label:"Field Set 1", body:{
		 rows:[
          	{ view:"text", label:"Login"},
			{ view:"text", label:"Email"}]
         }
    }
]}
~~~

<img src="desktop/form_fieldset.png">

{{sample 13_form/05_extras/01_fieldset.html }}
            
###Multiview Form

Form field can be placed into different tabs thus forming a [multiview](desktop/multiview.md) layout. Switching between tabs there is implemented with [tabbar and segmented](desktop/tabbar_switching.md) 
buttons as well as with the help of the dedicated [tabview](desktop/tabview.md). 

The swithing controls are placed directly into the array of form **elements**.

~~~js
{view:"form", elements:[
	{view:"tabview",
		tabs:["A","B","C"],
		cells:[
			{ view:"text", name:"value1", label:"value1" },
			{ view:"text", name:"value2", label:"value2" } 
        ]
    }]
}
               
~~~

{{sample 90_tests/02_tabs_form.html}}


##Retrieving Form Values

Since form elements comprise an array you can refer to each of them by its **number** starting from 0 and get/set the value of any item. 

####By its **position** in an array

~~~js
var form1 = [
	{ view:"text", id:"log", label:'Login', name:"login"},
	{ view:"text", id:"em" label:'Email', name:"email" },
    { view:"button", id:"sub", name:"submit", value:"Sumbit"}
];

webix.ui({
	view:"form", 
    id:"my_form", 
    elements: form1
});
		
var login = form1[0].login;// returns current input value;
var button = form1[2].submit; //returns "Submit";
~~~

####With the help of the **getValues()** method

The function returns an array of values of all the controls in this form, whether it is input fields or checkbox or radio. To get to the necessary value, you should specify the **name** of the needed control. 

~~~js
$$("my_form").getValues().login; //returns current value of the text input field 
~~~

####With the help of getValue() method

The method is applied directly to the needed control specified by **ID**:

~~~js
$$("log").getValue();
~~~

##Disabling Form Elements

Any form element can be **disabled** or switched to **readonly** mode. 

~~~js

var form2 = [
		{ view:"header" }
		{ view:"text", value:'..', label:".."},
		{ view:"text", type:'..', value:'..', label:".."},
]

form2[i].readonly = true; //where "i" takes the number value of the element staring from 0.
form2[i].disabled = true; 
~~~

{{sample 13_form/02_api/02_attributes.html }}

See also [Form and HTMLform Treatment](desktop/form_tasks.md) article to learn more about the most important form methods. 

##Reacting on Changes in Input Fields

If you want to track the moment when the value in an input changes from one to another and attach some event to it, make use of the dedicated **"onChange"** event. 

The event is attached to element object that can be retrieved by its **ID** or **name**.

The attached function can be any you wish. Here is an example of logging the changes. The old value comes as **oldv** parameter while the new one is referred as **newv**

~~~js
$$("form1").elements["login"].attachEvent("onChange", function(newv, oldv){
			webix.message("Value changed from: "+oldv+" to: "+newv);
~~~

{{sample 13_form/02_api/07_onchange_event.html }}

###API Reference

[Methods, properties and events](api__refs__ui.form.html)

###Related Articles

- [Form and HTMLform Treatment](desktop/form_tasks.md)
- [Uploading Files with Form](desktop/uploader_integration.md)
- [HTMLform](desktop/htmlform.md)
- [Control Guide](desktop/controls.md)
- [Data Validation in Forms](desktop/data_validation.md)
- [Event Handling](desktop/event_handling.md)
- [Data Binding](desktop/data_binding.md)
- [Creating Message Boxes](desktop/message_boxes.md)

