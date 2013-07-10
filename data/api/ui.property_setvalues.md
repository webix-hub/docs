setValues
=============



@short: sets values into all the form inputs
	
@params: 
- values		object		hash of property - value pairs
* update		bool		if true adds updates the form with new values while exisitng values remain. **False by default**	

@example:
$$("sets").setValues({
		width:250,
		height:480,
		url:"http://webix.com/data",
		type:"json"
	});
@relatedapi:
	api/ui.property_getvalues.md
@related: 
	desktop/property_sheet.md
@relatedsample:
	07_property/01_init.html

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


