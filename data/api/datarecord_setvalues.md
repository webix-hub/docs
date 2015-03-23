setValues
=============



@short:
	sets values for all inputs in the component

	
@params: 
- values		object		hash of property - value pairs
* update		boolean		if true adds updates the form with new values while exisitng values remain. **False by default**	

@example:
function set_form(){
    $$('myform').setValues({
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

@template:	api_method
@descr:

The methods allows for setting several values at at time. Pass the IDs of the necessary form elements and their
values into the function. 

The second parameter helps manipulate values set separately. By delaut, it is *false*. 

Take that we set new value for a **field_b** input from the form described above. 

~~~js
$$('my_form').setValues({ field_b:"Paris" }); 
~~~

In this case, the value for the field_a is lost. To avoid this, set the update parameter to *true*. 
The form will be updated with a new value for **field_b** input while **field_a** value remains unchanged. 

~~~js
$$('my_form').setValues({ field_b:"Paris" }, true); 
~~~





