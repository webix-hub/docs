Form
===============

##API Reference

- [Methods, properties and events](api__refs__ui.form.html)
- [Samples](http://docs.webix.com/samples/13_form/index.html)

##Overview

Any form is a means of getting an information from users. It contains input fields and select components like checkboxes,
radiobuttons alongside with submit/cancel buttons depending on the situation. Find them all in our [Controls Guide](desktop/controls.md).

<br>

<img  style="display:block; margin-left:auto;margin-right:auto;"   src="desktop/basic_form.png"/>

<br>

##Initialization
Ui-related form inherits from [view](desktop/view.md). It resembles [layout](desktop/layout.md) very much as it is divided into columns and rows where controls are put. 

- **elements** - the form's specific property, an array of vertically arranged controls and control groups;
- **columns** - an array of horizontally arranged controls and control groups;
- **rows** -  an array of vertically arranged controls and control groups.

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
		{ view:"text", type:"password", label:"Password"},
		{ margin:5, cols:[
			{ view:"button", value:"Login" , type:"form" },
			{ view:"button", value:"Cancel" }
		]}
		]
	});
~~~
{{editor http://webix.com/snippet/63c02180	Basic Initialization }}

{{note
There exists a possibility to specify [common configuration](desktop/common_config.md) for all controls included in this or that form.
}}

##Settings Initial Values

Initial form values can be set in different ways: 

**Setting value of each element separately**

Every form control features [value](api/link/ui.text_value_config.md) property: 

~~~js
{ view:"text", id:"fname", value:"Adam Smith"}
~~~

Or, you can call the [setValue()](api/link/ui.text_setvalue.md) method for it:

~~~js
$$("fname").setValue("Adam Smith");
~~~

However, this way is not effective while working with the whole form.

**Using setValues API**

 To set form values in a scope, you can use its [setValues()](api/link/ui.form_setvalues.md) method. It takes an object with values as first (and mandatory) parameter: 

~~~js
$$("$form1").setValues({
	value1:"111", value2:"222"
});
~~~

Data names of these values must coincide with values of [name](api/link/ui.text_name_config.md) parameters of the corresponding form elements: 

~~~js
elements:[
	{ view:"text", name:"value1"},
    { view:"text", name:"value2" }
]
~~~

**Complex Data**

Form values can be of any complexity level, which means that sub items are acceptable. For these needs the form should have the following configuration: 

- **complexData** property should be set to true;
- element **names** should be concatenated from all the data names in the chain. 

~~~js
webix.ui({
	view:"form",
	complexData:true,
	elements:[
		{ label:"Width", view:"text", name:"layout.width" },
		{ label:"Height", view:"text", name:"layout.height"}
	]
});

$$("sets").setValues({
	layout:{
		width:250,
		height:480
	}
});
~~~

{{editor http://webix.com/snippet/f3c4bebe	Form: Data with complex properties }}

**Loading/parsing values**

Webix form can load or parse data like any data management component. All the [data loading rules](desktop/data_loading.md) are true for it. 

Again, data **attributes** should coincide with **names** of form fields: 

{{snippet
Parsing
}}
~~~js
var data = {id:1, fname:"Ann", lname:"Brown"};

webix.ui({
	view:"form", id:"myform", elements:[
		{view:"text", name:"fname"},
    	{view:"text", name:"lname"}
	],
    data:data
});    
//or
$$("myform").parse(data);
~~~

{{snippet
Loading
}}
~~~js
$$("myform").load("data.php");
~~~

##Grouping Controls in Form

###Dividing form into sections

Form **elements** can be divided into columns and rows with any level of complexity.

~~~js
{ view:"form", elements:[
	{cols:[
    	{ rows:[
        	{view:"text"},
            {view:"datepicker"}
        ]},
        {view:"checkbox"},
        {view:"button"}
    ]},
    
]}
~~~

To add user-friendliness to form interface, separated blockes can be set within it by:

- Adding **headers** with **section** type before control blocks;
- Dividing a form into **fieldsets**.

**Sections**

Form elements are placed into different **row arrays** where the first row is a **section** header. Its template define text value of the header:

~~~js
{view:"form", elements: [
	{ rows:[ 
		{ template:"Alpha fields", type:"section"},
		{ view:"text", label:"Alpha 1", value:'' },
        { view:"text", label:"Alpha 2", value:'' }]
    },
	{ rows:[ 
		{ template:"Beta fields", type:"section"},
		{ view:"text", label:"Beta 1", value:'' }]
    }
]} 
~~~

<br>

<img src="desktop/form_sections.png">

<br>

{{editor http://webix.com/snippet/ff2517a3	Splitting Form into Sections}}

**Fieldsets**

[Fieldset](desktop/fieldset.md) is a collection of controls surrounded by a border from all the sides. Webix fieldset features text **label** and **body** where **rows** or **cols** array of controls are stored:

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

<br>

<img src="desktop/form_fieldset.png">

<br>

{{editor http://webix.com/snippet/22f3796f 	Filedset}}
            
###Multiview Form

Form field can be placed into different tabs thus forming a [multiview](desktop/multiview.md) layout. Switching between tabs there is implemented with [tabbar and segmented](desktop/tabbar_switching.md) 
buttons as well as with the help of the dedicated [tabview](desktop/tabview.md). 

The switching controls are placed directly into the array of form **elements**.

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

{{editor http://webix.com/snippet/897bc9d4	Form with Tabs}}


##Retrieving Form Values

####Getting value of a single element

Since form elements comprise an array you can refer to each of them by its **number** starting from 0 and get/set the value of any item. 

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

Or, you can apply **getValue()** method directly to the needed control:

~~~js
$$("log").getValue();
~~~

**Getting values of all form elements**

To get an associative array of all elements (*name:value* pairs) you can use api/link/ui.form_getvalues.md method. To get to the necessary value, you should specify the **name** of the needed control. 

~~~js
var values = $$("my_form").getValues(); //returns { login:"", email:"", submit:"" }

values.login; //returns current value of the text input field 
~~~

Additionally, you can get only **changed** and **unchanged** form values with the following methods respectively:

- api/link/ui.form_getdirtyvalues.md - returns a hash of changed values;
- api/link/ui.form_getcleanvalues.md - return hash of unchanged values.


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

{{editor http://webix.com/snippet/4cf99378	Attributes}}

See also [Form and HTMLform Treatment](desktop/form_tasks.md) article to learn more about the most important form methods. 

##Reacting on Changes in Input Fields

If you want to track the moment when the value in an input changes from one to another and attach some event to it, make use of the dedicated **"onChange"** event. 

The event is attached to element object that can be retrieved by its **ID** or **name**.

The attached function can be any you wish. Here is an example of logging the changes. The old value comes as **oldv** parameter while the new one is referred as **newv**

~~~js
$$("form1").elements["login"].attachEvent("onChange", function(newv, oldv){
			webix.message("Value changed from: "+oldv+" to: "+newv);
~~~

{{editor http://webix.com/snippet/9a324ef6	'onChange' event}}

##Getting Parent Form for the Input

The easiest way to get to a parent form from any of its elements is to call the api/link/ui.view_getformview.md:

~~~js
{view:"text", on:{"onChange":function(){
	var form = this.getFormView();
}}}
~~~

##Sending Form Data

Form data can be sent to server in either of the following ways: 

1 . Using Webix [Ajax helper](helpers/ajax_operations.md):

~~~js
webix.ajax().post("some.php", form.getValues()); 
//with callback
webix.ajax().post("some.php", form.getValues(), function(text, data, xhr){ });
~~~

2 . Using [webix.send](api/_send.md) method that emulates HTML form submitting: 

~~~js
webix.send("come.php", form.getValues());
~~~

3 . Indirectly, via the **bound master component** or DataCollection: 

The method is good when the form is used for editing the data of the main component (datatable, tree, list, etc.). In this case not the form data matters
but the data of the main component. Form saves the data to the master component while the master handles the serverside part. 

~~~js
//data from selected list item is pushed to the form
form.bind(list);

//pushes the data back to list item
form.save()
~~~

Data binding concept is described in a [separate documentation article](desktop/data_binding.md#databinding). 



##Related Articles

- [Form and HTMLform Treatment](desktop/form_tasks.md)
- [Uploading Files with Form](desktop/uploader_integration.md)
- [HTMLform](desktop/htmlform.md)
- [Controls List](desktop/controls.md)
- [Controls Common Functionality Guide](desktop/controls_guide.md)
- [Data Validation in Forms](desktop/data_validation.md)
- [Event Handling](desktop/event_handling.md)
- [Data Binding](desktop/data_binding.md)
- [Creating Message Boxes](desktop/message_boxes.md)

