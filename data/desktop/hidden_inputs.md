Hidden Input Fields
=============

Hidden input fields are often included into the form to **set default values** into them, the values that are not visible to users yet required for required to be sent to server 
They are used for saving state in multi-page forms, collecting cookies or just storing data apart from the filled in.

Within HTML developers make use of the hidden property on the INPUT tag, yet the library offers to omit the unnesessary actions and manipulate just with data. 

{{note
In fact, you needn't create any hidden text fields. Because all you need is their **values**.
}}

First, create a form with  collection of the needed controls and input fields.

~~~
webix.ui({
	view:"form", id:"my_form",
	elements: [
				{ view:"text", label:'Login', name:"field_a", width:150, labelAlign:"right" },
				{ view:"text", label:'Email', name:"field_b", width:200, labelAlign:"right" }
              ]
})
~~~

These are visible input fields for users to fill in. 

Then, set values for invisible inputs without initializing them. They are automtically created with your values set: 

~~~js
$$('my_form').setValues(
			{ field_d:"Hidden Info"}
		);
~~~

When getting values for the filled in form, the function will get values from all the field, regardless of their visibility.

Let's paste them to a textarea to see that it works: 

~~~js
{ view:"button", click:function(){
	values = JSON.stringify($$('my_form').getValues(), null, 2);
 	$$('log').setValue(values);}
}
~~~

<img src="desktop/form_hidden_inputs.png"/ >


{{sample 13_form/02_api/09_hidden_inputs.html}} 