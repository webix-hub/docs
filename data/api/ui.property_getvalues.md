getValues
=============


@short: derives values from the property sheet (like with form)
	
@returns: 
values	array	 returns hash of form values: data entered by user or initial data from the value property. 
	
@example:

function get_form() {
                var values = $$('myform').getValues();
                console.log(values);
            }
@relatedapi:
	api/ui.property_setvalues.md
@related: 
	desktop/form_tasks.md
@relatedsample:
	13_form/02_api/09_hidden_inputs.html

@template:	api_method
@descr:

To get value of some specific element within the form, you should specify its **ID** or **name**.

~~~js
webix.ui({
	view:"form",
    elements: [
    	{view:"text", id:"title", placeholder:"Enter film title"},
        {...},
        {view:"button", click:"get_title"}
    ]
})


function get_title() {
		var title = $$('myform').getValues().title;
        console.log(title);
		}

~~~
