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
			{ view:"text", name:'field_a', label: 'from', value: "Madrid"},
			{ view:"text", name:'field_b', label: 'to', value: "Milan"}
        ]},
		{ view:"button", label: 'Fill form', click:"set_form" }]
});
 
function set_form(){
	$$('myform').setValues({
		field_a: "London",
		field_b: "New York"
	});
};
~~~

There's a second parameter for the function that is responsible for **further form updates**. 

By defaul, it is **false,** which means that if you apply this function with a value just for one field, 
it will override the previously set values and they will be lost in nowhere. set to **true**, it allows for updating exisiting values with new ones. 

~~~js
$$('my_form').setValues({ field_b:"Paris" }); //the value for filed_a is lost!

$$('my_form').setValues({ field_b:"Paris" }, true); 
// the form is updated with the specified value
~~~

Check also the [API reference for this method](api/values_setvalues.md).

###**load()** 

Loads values from a data file. Here you should pass the path to a data file as well as data format into the function. 

~~~js
function load_form() {
	$$('myform').load("./data/book.xml", "xml");
}
~~~

###**getValues()** 

Gets all the form values including those of hidden and disabled fields. In the snippet below form values are pasted into the console log. 

~~~js
function get_form() {
	var values = $$('myform').getValues();
	console.log(values);
}
~~~

You can also specify whether to include values of disabled and hidden fields into the result: 

~~~js
$$('myform').getValues({hidden:false, disabled:false});
~~~

Check also the [API reference for this method](api/values_getvalues.md).

###**clear()** 

Clears all the form fields. 

~~~js
function clear_form() {
	$$('myform').clear();
}
~~~

###**focus()** 

Sets the focus into the desired field. If used without arguments sets focus into the component it's called from. In case the item's ID is passed into the function, the corresponding item gets focus. 

~~~js
<input type="button" value="Focus author" onclick="focus_form('author');" /> //htmlform
<input type="button" value="Focus genre" onclick="focus_form('genre');" />
            
...
function focus_form(item) {
	if (!item)
		$$('htmlform1').focus();
	else
		$$('htmlform1').focus(item);
}
~~~

{{sample 11_htmlform/01_htmlform_body.html }}

###**isDirty()**

Checks whether changes within form were made. The method is called before validation the form and saving form values and/or sending them to server.

~~~js
function save_form(){
 	var form = $$('form1');
    if(form.isDirty()){
    	if(!form.validate())
        	return false;
        form.save();
    }
 };
~~~

{{sample 13_form/02_api/10_binding.html}}

Check the [API reference for this method](api/values_isdirty.md).

###**setDirty()**

Marks the form as 'edited'. 

~~~js
$$('form1').setDirty();
~~~

Check the [API reference for this method](api/values_setdirty.md);  

###**bind()**

Binds the form to other component. In the snippet below list becomes a datasource for the form as well as helps save data from the form into the component. 

[More info](desktop/data_binding.md) on Data Binding

~~~js
<div>
	<input type="number" name="rank" />
	<input type="text" name="title" />
	<input type="date" name="year" />
</div>
<script type="text/javascript">
webix.ui({
	view:"list", 
	template:"#rank#. #title# Year:#year#"})

$$('htmlform1').bind($$('list1'));
//on clicking any list item the form is filled with the same values
</script>
~~~
{{sample 11_htmlform/05_htmlform_binding.html }}

###**validate()**  

Checks where the input data complies with the defined rules for the form. 

More info on [data validation](desktop/data_validation.md).

{{note
Don't forget to specify the ID of a [form](desktop/form.md) / [htmlform](desktop/htmlform.md) to enable this functionality since the ID is used to call these functions.
}}

@complexity:2