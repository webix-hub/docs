validate
=============

@short: checks data in the form

@params:

* mode	object 	validation mode for hidden and disabled fields


@example:

webix.ui({
	view:"form",
    elements:[
    	{ view:"text", label:'Login', name:"login" },
		{ view:"text", label:'Email', name:"email" },
    ],
    rules:{
    	"email":webix.rules.isEmail,
    	"login":webix.rules.isNotEmpty
    }
});

$$("$form1").validate();



@returns: result of validation		boolean 	result of validation (success or failure)
@template:	api_method

@relatedapi: 
	api/refs/rules.md
    api/validatedata_clearvalidation.md
@related:
	desktop/data_validation.md
@relatedsample:
	13_form/04_validation/01_basic.html
@descr:
{{note
Note that the **name** property is required for controls, as it allows accessing the field through the form for validation.
}}

Form is validated according to the rules you ought to define for the necessary form fields. See the [corresponding
chapter](api/refs/rules.md) of the API reference. 

###Customizing validation logic

By default values of the hidden and disabled fields are not checked. 
If you want to include them into validation process, you need to provide a validation mode: 

~~~js
//hidden fileds will be validated
$$("$form1").validate({hidden:true});

//both hidden and disabled fields will be validated
$$("$form1").validate({hidden:true, disabled:true});
~~~

Note that if the form is hidden itself, hidden and visible fields are not separated. 

