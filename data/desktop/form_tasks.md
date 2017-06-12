HTMLForm and Form Treatment
================

The most commonly used methods here include: 

###**setValues()**

Sets all the form values in one scope. Its argument is an object than contains 'property-value' pairs where new values are assigned to form elements.

Form elements (text fields, radios and checkboxes) are referred by either their **names**. 

~~~js
webix.ui({
	rows:[
    	{ view:"form", id:"myform", elements:[
			{ view:"text", name:"field_a", label: "from", value: "Madrid"},
			{ view:"text", name:"field_b", label: "to", value: "Milan"}
        ]},
		{ view:"button", label: 'Fill form', click:"set_form" }
    ]
});
 
function set_form(){
	$$("myform").setValues({
		field_a: "London",
		field_b: "New York"
	});
};
~~~

There's a second parameter for the function that is responsible for form update. 

By default, it is **false,** which means that if you apply this function with a value just for one field, 
it will override the previously set values and they will be lost in nowhere. Set to **true**, it allows updating existing values with new ones. 

~~~js
//the value for field_a is lost!
$$("myform").setValues({ field_b:"Paris" }); 

//the form is updated with the specified value, the value for field_a is preserved
$$("myform").setValues({ field_b:"Paris" }, true); 

~~~

Check also the [API reference for this method](api/values_setvalues.md).

###**load()** 

Loads values from a data file. Here you should pass the path to a data file as well as data format into the function. 

~~~js
$$("myform").load("./data/book.xml", "xml");
~~~

###**getValues()** 

Gets all the form values including those of hidden and disabled fields. In the snippet below form values are pasted into the console log. 

~~~js
webix.ui({
	view:"form",
    elements:[
    	//form fields must have names for getting their values
    	{ view:"text", name:"login"},
        { view:"text", name:"email"}
    ]
});

var values = $$("myform").getValues();
console.log(values);
~~~

You can also specify whether to include values of disabled and hidden fields into the result: 

~~~js
$$('myform').getValues({hidden:false, disabled:false});
~~~

Check also the [API reference for this method](api/values_getvalues.md).

###**clear()** 

Clears all the form fields. 

~~~js
$$("myform").clear();
~~~

###**focus()** 

Sets the focus into the desired field. If used without arguments, the focus is set into the first focusable element.
In case the element's name is passed into the function, the corresponding element gets focus.

~~~js
webix.ui({
	view:"form", id:"myform",
    elements:[
    	{ view:"text", name:"login"},
        { view:"text", name:"email"}
    ]
});

//sets focus into the first field (here it is "login")
$$("myform").focus();
//sets focus into the "email" field
$$("myform").focus("email");
~~~

###**isDirty()**

Checks whether changes within form were made. The method is called before validation the form and saving form values and/or sending them to server.

~~~js
function save_form(){
 	var form = $$("form1");
    if(form.isDirty()){
    	if(!form.validate())
        	return false;
        form.save();
    }
 };
~~~

{{sample 13_form/02_api/10_binding.html}}

Check the [API reference for this method](api/values_isdirty.md).

{{Note, that the **save()** method is available only for a form which is [bound to a data component](desktop/data_binding.md#databinding).}}

###**setDirty()**

Marks the form as "edited". 

~~~js
$$("form1").setDirty();
~~~

Check the [API reference for this method](api/values_setdirty.md);  

###**bind()**

Binds the form to other component. In the snippet below list becomes a data source for the form as well as saves changed form data. 

[More info](desktop/data_binding.md) on Data Binding

~~~js
webix.ui({
	view:"form",
    id: "form1",
	elements:[
     	{ view:"text", name:"rank"},
        { view:"text", name:"title"}
    ]
});

webix.ui({
     view:"list",
     id: "list1",
     template:"#rank#. #title#",
	 select:true,
	 data:small_film_set
});

$$("form1").bind($$("list1"));
~~~
{{sample 13_form/02_api/10_binding.html }}

Now, the following actions are possible: 

- on clicking any list item the form is filled with the same values according to the coinciding data keys and field names;
- the form receives the save() method, which pushes that changed data back to list.


###**validate()**  

Checks whether the input data complies with the defined rules for the form. The form's **rules** property object contains 
validation functions for form fields according to their names:

~~~js
webix.ui({
	view:"form",
    id:"myform",
    elements:[
    	{ view:"text", name:"rank"},
        { view:"text", name:"title"}
    ],
    rules:{
    	rank:webix.rules.isNumber,
        title:webix.rules.isNotEmpty
    }
});

$$("myform").validate();
~~~

More info on [data validation](desktop/data_validation.md).

@complexity:2