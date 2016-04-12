Data Validation
=============

All the data from input fields must be validated before being sent to server. Data validation is implemented with [dataprocessor](desktop/dataprocessor.md), 
[htmlform](desktop/htmlform.md) and [form](desktop/form.md) as well as with all the data management components ([datatable](datatable/index.md), [dataview](desktop/dataview.md), [tree](datatree/index.md), 
[treetable](desktop/treetable.md), [list](desktop/list.md)). 

Data validation is activated: 

- Generally, validation is started on calling the **validate()** method. You can call it:
	- on **form submitting**;
    - on any **inner event** (*onChange* for form, *onAfterEditStop* for data component);
- With the **DataProcessor** object data is validated each time you save it to server. If validation fails, data isn't sent to server;
- With **data components** data is validated each time changes are made - [editing](desktop/edit.md), [adding](desktop/add_delete.md) and [updating](desktop/update.md) (the moment *add()* and *update()* methods are called);
- By means of on-the-go [HTML5 validation](#html5) that works for form and htmlform.

{{note
While the first three are features of this library and work in conjunction with [validation rules](#rules), the latter is a built-in HTML5 feature. 
}}

##Validation by API

Data validation can be triggered on any event of any form element and validate any number of controls as well as the whole form:

Normally, form and htmlform, data validation is bound to a **submit** [button](desktop/button.md) with the help of **click** [event handler](desktop/event_handling.md):

~~~js
{ view:"button", value: "Submit", click:function(){
	form.validate(); 
}} 
~~~

At the same time, you can trigger validation whenever you like, e.g. on **onChange** event of a control: 

~~~js
{ view:"text", name: "fname", on:{
	"onChange":function(){
    	//either validate the whole form
		this.getParentView().validate(); 
        //or validate this element only
        this.validate();
    }}
} 
~~~

##Live Validation in Forms

Validation event can not only be attached to the control in a common way (as above) but by specific [validateEvent]() property that allows for automatic attaching of two events: 

- **"blur"** - to start validation on **onBlur** event, when focus is moved from the control;
- **"key"** - to start validation on **onKeyPress** event when a users enters a character into the field.

Note, that this method allows for defining validation event only for this control. 

In case of data components, validation can be set on data loading to ensure that data came with right values: 
 
~~~js
 webix.ui({
 	view:"datatable",
    ..// config
 	ready:function(){
		this.validate();}
});
~~~
 

{{editor http://webix.com/snippet/4f477d95	Datatable Validation }}

##Partial Validation

With the **validate()** method you can validate:

- the whole form/component:

~~~js
form.validate(); //all fields are validated
list.validate(); // data of the whole list is validated
~~~

- specific component item;

~~~js
list.validate(2); //data item with id=2 will be validated
text.validate(); //validate only this text field
~~~


{{note
Note that if a separate form field is validated, only its own validation rules will be considered.
}}

~~~js
webix.ui({
	view:"form", elements:[
    	{ view:"text",  required:true, name:"text1" },
		{ view:"text",  validate:webix.rules.isNumber, name:"text2" }
    ]
});

$$("text1").validate();
~~~

{{editor http://webix.com/snippet/abb8d98c	Per Item Validation with Predefined Rules}}


##Validation Message

If any record or field fails validation, it is marked with embedded **red highlighting** (true for both in-library and HTML5 validation).

It is also very easy to apply built-in validation messages for form fields.  

<img src="desktop/form_validation_message.png">

All you need to do is to specify the *invalidMessage* property and set the necessary text of the message:

~~~js
{view:"text", label:'Username', name:"login", invalidMessage:"Login can not be empty"}
~~~

Validation messages require some space under form fields. You should specify the *bottomPadding* property 
and set the appropriate value to define the bottom offset of the input:

~~~js
var formElements = [
	{ view:"text", label:'Username', name:"login", 
    	invalidMessage: "Login can not be empty" },
    ...
];

webix.ui({
	view:"form",
	elementsConfig:{
    	labelPosition: "top",
    	labelWidth: 140,
    	bottomPadding: 18
	},
    elements: formElements
});
~~~

{{editor http://webix.com/snippet/99625abb	Validation Message}}

{{note
The property is 18 px by default. If the value isn't set, space for validation messages will be automatically specified as 18px.
}}


<h3 id="bottomlabel">Adding input description</h3>

There's also a possibility to put some hints on correct filling of form fields for users.

<img src="desktop/form_filling_hints.png">

The *bottomLabel* property will be helpful for this purpose. Don't forget to set the bottomPadding property to specify the size of labels.

~~~js
{ view:"text", type:"password", label:"Password", bottomPadding: 35, 
	bottomLabel: "* The password must have at least 6 characters"},
~~~

{{editor http://webix.com/snippet/0e266f14	Input Description at the Bottom}}

##Validation Handling

Additionally, a **custom message** can be set to handle validation process. It's done in two ways: 

**1** . Webix message can be used together with the **validate()** method within the **sumbit_form** custom function;

~~~js
webix.ui({
	view:"form", 
	id:"myform", 
	elements:[
		{},  //input fields
		{ view:"button", inputWidth:300, label:"Submit", click:"submit_form"}]
});
 
submit_form = function(){
	if (this.getParentView().validate()) //on success
		webix.message("All is correct");
	else
		webix.message({ type:"error", text:"Form data is invalid" });
};
~~~

**2** . Webix message can be attached to validation events  with the help of its **on** property. Possible events here are:

- **onAfterValidation** - triggers on validation process complete;
- **onValidationSuccess** - triggers if data passes validation successfully;
- **onValidationError** - triggers in case an error during validation happens. 

Here you can see how message can be formed in case of a validation error:

~~~js
on:{
webix.ui({
	view:"form",
	on:{
		onValidationError:function(key, obj){
			text = "Login can't be empty";
			webix.message({ type:"error", text:text });
	}
});
~~~

{{editor http://webix.com/snippet/25718e0c	'onValidationError' Event}}

Message boxes of all types are described [here](desktop/message_boxes.md). 

##Validation Rules {#rules}

The **validate()** function checks if data complies to certain rules defined in the **rules** object that contains a collection of **property-rule** pairs. 
Predefined rules are accessed through **webix.rules** class. 

**Form validation**

Here you attach rules to inputs by their **names**. **Name** is read-only property that can be assigned to any input of the form/ htmlform. 

You can do this either within **rules** object property of the form component:

~~~js
view:"form", elements:[
	{view:"text", name:"field1"},
    {view:"text", name:"field2"}
],
rules:{
	field1:rule1,
    field2:rule2
}
~~~

{{editor http://webix.com/snippet/5763548d	Basic  Validation}}

Or, you can attach a rule right in the **input constructor** as value of its **validate** property:

~~~js
view:"form", elements:[
	{ view:"text", label:'Is a Number', validate:webix.rules.isNumber, name:"text2" },
    { view:"text", label:'Is an Email', validate:webix.rules.isEmail, name:"text3" }
],
elementsConfig:{
	labelAlign:"right",
	on:{
		'onChange':function(newv, oldv){
			this.validate();
		}
	}
}
~~~

{{editor http://webix.com/snippet/abb8d98c	Per Item Validation with Predefined Rules}}

**Component Data Validation**

Here you need to define which data item you'd like to validate, namely specify its template #value# or, in case of [datatable](datatable/index.md), column ID. 

~~~js
rules:{
	"template/ID": rule
}
~~~

####Validation rules can be of three types:

- Predefined Rules
- Custom Rules
- Rules using Special Validation Keys

##Predefined Rules

There are four of them: 

- **isNotEmpty** - checks whether a value is empty;
- **isNumber** - checks whether a value is number;
- **isEmail** - checks whether a value is e-mail (looks for an @-sign, fullstop, text after it);
- **isChecked** - checks whether a checkbox is checked.

~~~js
webix.ui({
	view:"form1",
	elements:[
		{ view:"text", label:'Username', name:"login" },
		{ view:"text", label:'E-mail address', name:"email"},
		{ view:"text", label:'Password', name:"password"},
		{ view:"checkbox", labelRight:'I accept terms of use', name:"accept"}

	],
	rules:{
		login: webix.rules.isNotEmpty,
		email: webix.rules.isNumber,
		phone: webix.rules.isEmail,
        accept: webix.rules.isChecked
	}
});
~~~

{{editor http://webix.com/snippet/58337d22	Validation with Predefined Rules}}

In case you are parsing JSON data, you should set the predefined rules as follows:

~~~js
"rules":{  
   "login":"isNotEmpty",  
   ...
}
~~~

It is needed for JSON data to be parsed properly.

{{note
Note that in case you define rules within input constructor, the **isNotEmpty** rule can be substituted by **required** property.
}}

~~~js
//it's better to use
{ view:"text", label:'Not empty', required:true }
//instead of 
{ view:"text", label:'Not Empty', validate:webix.rules.isNotEmpty }
~~~

{{editor http://webix.com/snippet/1170b689	Required Inputs in a Form}}

####Conditional usage of built-in rules

Predefined validation rules can be wrapped by another function to apply them selectively:

{{snippet
Ignoring empty values during validation
}}
~~~js
rules:{
   city:function(value){
        return !value || webix.rules.isNumber(value)
  }
}
~~~

Remember that a validation function must return *true* for success and *false* for failure. 

##Custom Rules

Basically, any custom function can define a rule. Such function takes the validated **value** as parameter. 

Validation rules may define the minimal and maximum value for the form field or check whether the input data complies to a certain criterion. 

{{snippet
Validation Criteria for Numbers
}}
~~~js
webix.ui({
	view:"form",
	rules:{
		text1:function(value){ return value > 100; },  // over 1400
		text2:function(value){ return value < 100; }, // below 100
		text3:function((value){ return value > 0;} //positive
	}
});
~~~

{{editor http://webix.com/snippet/0be49ce9	Validation with Custom Rules}}

##Special Validation Keys

The keys are used with both predefined and custom rules for special cases, for instance:

- if you need apply the same rule to each property of data object, use **$all** key; 
- if you need data from several form fields for validation, use **$obj** key. 

**$all** key

{{snippet
All the fields must be filled
}}
~~~js
rules:{
	$all:webix.rules.isNotEmpty
}
~~~

{{editor http://webix.com/snippet/b994ccba	Validation with a Common Rule for All Fields}}

**$obj** key

The whole data object is passed into the rule while field data is accessed as **obj.field_name** or **obj.template/ID**. 

{{snippet
Both votes and rank values must be positive
}}
~~~js
rules: {
	$obj:function(obj){
		return obj.votes > 0 && obj.rank > 0;}
} 
~~~

{{editor http://webix.com/snippet/8e886155	Datatable Validation. Complex Rule}}

It is as well used in defining complex rules, e.g. when password confirmation is required. 

{{snippet
Passwords must be equal
}}
~~~js
rules:{
	$obj:function(data){ //data = obj
		if (data.pass1 != data.pass2){
			webix.message("Passwords are not the same"); 
			return false;
		}
	return true;
    }
}
~~~

{{editor http://webix.com/snippet/375f4a7c	Password Confirmation}}

Note, that even if you don't pass data object into the function, you still can work with all its values derived with form **getValues()** method. 

{{snippet
Complex Rule
}}
~~~js
webix.ui({
	view:"form",
	rules:{
		$obj:function(){
			var data = this.getValues(); //!getting data object
			if (!webix.rules.isEmail( data.email ))  //checking email
            	return false;
		if (data.name == "") //checking name
        	return false;
		return true; //success!
		}
	}
});
~~~

{{editor http://webix.com/snippet/ae8d1448	Form Validation. Complex Rule}}

What should be taken into account:
 
- If there are fields without **name** property, the function returns *false*;
- In case all rules are observed, the function returns *true* and the form is treated as valid. 


##Validation of Hidden and Disabled Fields in Form 

By default hidden and disabled fields are not validated. 
If you want to include them into a validation process, you need to provide validation mode: 

~~~js
//hidden fileds will be validated
$$("$form1").validate({hidden:true});

//both hidden and disabled fields will be validated
$$("$form1").validate({hidden:true , disabled:true});
~~~

{{editor http://webix.com/snippet/1f7271b0	Form with Tabs}}

Note that if the form is hidden itself, hidden and visible fields are not separated. 


##Data Validation for Components

As with form, rules are set within the component constructor. With validation enabled, you'll be warned about invalid data in your component on client side while avoiding loading wrong data to server. 

The validated data item is defined by its template, rules being the same as with form elements:

{{snippet
List Data Validation
}}
~~~js
webix.ui({
	view:"list",
    template:"#rank#. #title#",
    rules:{
    	title: webix.rules.isNotEmpty
    },
    ..//list config
})
~~~

As a result, you cannot add an empty record to list data. 

{{editor http://webix.com/snippet/9c70df9b	List Validation}}

Read more about [data templates](desktop/html_templates.md) here. 

With [datatable](datatable/index.md) component we need a column ID, since it correlates with data items. 

{{snippet
Datatable Data Validation
}}
~~~js
webix.ui({
	view:"datatable",
	columns:[
		{ id:"rank", header:"", ..},
		{ id:"title", header:"", ..}
    ],
    rules:{
		"rank": positiveNumber, //custom rule
		"votes": positiveNumber
	}
})
~~~

{{editor http://webix.com/snippet/4f477d95	Datatable Validation }}

Invalid data is highlighted within the component and cannot be sent to server (in case you work with [dataprocessor](desktop/dataprocessor.md)).

**Validation during in_Component editing**

By default, with rules defined, validation is started each time we finish editing and close the editor for this or that data item. 

However, **editing events** allow validation with an editor opened. The obvious bonus of such method is that until new data is valid, it can't be changed within the component. 

Here the **onBeforeEditStop** event comes to our help. It's attached to the component you work with: 

~~~js
webix.ui({
	view:"datatable",
    ..//config
	on:{
		onBeforeEditStop:function(state, editor, ignore){
			var check = ( editor.type.getValue() != "" );
			if (!ignore && !check){
				webix.message(editor.column+" must not be empty");
				return false;
			}
		}
	}
});
~~~

{{editor http://webix.com/snippet/abc4d96f	Datatable. Editing Validation}} 

The function takes three arguments here:

- **state** - the object that stores old and new value of the text editor;
- **editor** - the editor being used;
- **ignore** - the flag to indicate user action after editing, whether they save the new data or escape the saving thus restoring the old data. 

More information about text editors you can find in the [dedicated article](desktop/editing.md).

##HTML5 Data Validation {#html5}

Here we speak about client side, in-browser data validation powered by HTML5 means. 

In HTML5 layout input tags come in a plenty of types and feature a number of attributes that define validation pattern. 

Input types coincide with a **type** property of the view **text** while other input attributes are listed within the **attributes** object property: 

<table>
    <tr class="row0">
        <th class="col0 centeralign">  HTML  </th><th class="col1 centeralign">  Javascript  </th>
    </tr>
    <tr class="row1">
        <td class="col0 leftalign">  
~~~html
<input type="text" id="text1" 
	title="First name is required!" 
    maxlength="25"
    placeholder="Your name" required>
<label for="text1">First name</label>
~~~
        </td>
        <td class="col1 leftalign"> 
~~~js
{ view:"text", type:"text", attributes:{
	maxlength:25,
	required:"true",
	title:"First name is required!"
}, value:'', label:"First Name"}
~~~
        </td>
    </tr>
</table>

Here validation is defined by **required** attribute.

The validation process starts as soon as you type the first character into the field. When the necessary pattern is observed, a red highlighting disappears. Furthermore, if you try submitting the form, a validation  error
message appears for each field that has been incorrectly filled: 

- in case of the wrong filling: "Please enter an email address/ a URL !" - depending on the *type* property value;
- in case of an empty field: "Please fill out this field!"

HTML5 input types for the library's form component are as follows:: 

- **text** (default type for this lib);
- **password** - hides typed characters;
- **email** - requires **@** symbol for validation;
- **url** - requires **http://** prefix for validation. 

{{editor http://webix.com/snippet/8ce22a24	HTML5 Data Validation}}

###Related Articles

- [Creating Message Boxes](desktop/message_boxes.md)

@complexity:2