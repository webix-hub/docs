setValues
=============

@short: sets values into the inputs of a form/toolbar/property sheet control
	
@params: 
- values		object		hash of property - value pairs
* update		boolean		if true, updates the form with new values while existing values remain. False by default

@example:
webix.ui({
	view:"property",
    id:"sheet",
    elements:[
        { type:"text", id:"field_a" },
        { type:"text", id:"field_b" },
    ]
});

function set_form(){
    $$("sheet").setValues({
       field_a: "London", 
       field_b: "New York"
    });
};
    
@relatedapi:
	api/link/ui.form_getvalues.md
    api/values_complexdata_config.md
@related: 
	desktop/form_tasks.md
@relatedsample:
	13_form/02_api/09_hidden_inputs.html
    13_form/02_api/14_complex_values.html

@template:	api_method
@descr:

The methods allows for setting several values at time. Pass the 
**IDs** of the necessary elements and their values into the function. 

##Complex Data

In the **complex data** mode the object with values can feature sub items of any complexity level. 
In this case elements names are concatenated from all the data names in the chain: 
~~~
webix.ui({
	view:"property",
    id:"sheet"
    complexData:true,
    elements:[
    	{ type:"text", id:"layout.width" },
    	{ type:"text", id:"layout.height" }
	]
});

$$("sets").setValues({
    layout:{
        width:250,
        height:480
    }
});
~~~


Complex data mode is enabled with the help of a [same-name parameter](api/values_complexdata_config.md) in the form/toolbar/property sheet configuration.

##Updating values

The second parameter helps manipulate values separately. By default, it is set to **false**. 

Take that we want to set a new value for a *field_b* input from the property sheet described above. 

~~~js
$$("sheet").setValues({ field_b:"Paris" }); 
~~~

In this case the value for the *field_a* is lost. 

To avoid this, set the **update** parameter to *true*. The property sheet will be updated with a new value for *field_b* input while *field_a* value remains unchanged.

~~~js
$$("sheet").setValues({ field_b:"Paris" }, true); 
~~~




