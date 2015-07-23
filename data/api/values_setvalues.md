setValues
=============

@short: sets values into the inputs of a form/toolbar/property sheet control
	
@params: 
- values		object		hash of property - value pairs
* update		boolean		if true adds updates the form with new values while exisitng values remain. False by default	

@example:
webix.ui({
	view:"form",
    id:"myform",
    elements:[
        { view:"text", name:"field_a" },
        { view:"text", name:"field_b" },
    ]
});

function set_form(){
    $$("myform").setValues({
       field_a: "London", 
       field_b: "New York"
    });
};
    
@relatedapi:
	api/link/ui.form_getvalues.md
@related: 
	desktop/form_tasks.md
@relatedsample:
	13_form/02_api/09_hidden_inputs.html
    13_form/02_api/14_complex_values.html

@template:	api_method
@descr:

The methods allows for setting several values at time. Pass the 
**names** of the necessary elements and their values into the function. 

Data object with values can feature sub items of any level of complexity. In this case
elements names are concatenated from all the data names in the chain: 

~~~
webix.ui({
	view:"form",
    id:"sets",
    elements:[
    	{ view:"text", name:"layout.width" },
    	{ view:"text", name:"layout.height" }
	]
});

$$("sets").setValues({
    layout:{
        width:250,
        height:480
    }
});
~~~

##Updating values

The second parameter helps manipulate values separately. By default, it is set to **false**. 

Take that we want to set a new value for a *field_b* input from the form described above. 

~~~js
$$("my_form").setValues({ field_b:"Paris" }); 
~~~

In this case the value for the *field_a* is lost. 

To avoid this, set the **update** parameter to *true*. The form will be updated with a new value for *field_b* input while *field_a* value remains unchanged.

~~~js
$$("my_form").setValues({ field_b:"Paris" }, true); 
~~~



