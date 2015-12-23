getValues
=============


@short: derives input values from the form

@params:
* details	object, function	additional parameters (described below)
	
@returns: 
values	hash  returns hash of form values: data entered by user or initial data from the value property. 
	
@example:
webix.ui({
	view:"form",
    elements:[
         //name is necessary for getting the control's value
    	 { view:"text", label:'Login', name:"login"},
    	 { view:"text", label:'Email', name:"email" },
    	 { view:"button", value:"Sumbit"}
    ]
});


function get_form() {
	var values = $$("myform").getValues();
    //returns { login:"", email:""}
}
@relatedapi:
	api/link/ui.form_setvalues.md
    api/values_complexdata_config.md
@related: 
	desktop/form_tasks.md
@relatedsample:
	13_form/02_api/09_hidden_inputs.html

@template:	api_method
@descr:

###Additonal parameters 

When the method is called without the arguments, all the values 
of this form are returned including the values of 
hidden and disabled fields.

Still, you can alter this behaviour: 

~~~js
//returns values of visible fields only
$$('myform').getValues({hidden:false});

//returns values of enabled fields only
$$('myform').getValues({disabled:false});

//excludes both hidden and disabled fields from the result
$$('myform').getValues({
	hidden:false, 
    disabled:false
});
~~~

Additionally, you can pass a loop function into the method to
iterate through the form controls: 

~~~js
$$('myform').getValues(function(obj){
	//'obj' points to a control object
    console.log(obj.getValue());
});
~~~

###Getting the value of a specific element

To get value of some specific element within the form, you should specify its **name**.

~~~js
webix.ui({
	view:"form",
    elements: [
    	{view:"text", name:"title", placeholder:"Enter film title"},
        {...},
        {view:"button", click:"get_title"}
    ]
})


function get_title() {
	var title = $$('myform').getValues().title;
    console.log(title);
}
~~~
