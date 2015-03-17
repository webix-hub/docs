setValues
=============

@short: sets values into all the form inputs
	
@params: 
- values		object		hash of property - value pairs
* update		boolean		if true adds updates the form with new values while exisitng values remain. False by default.	

@example:
$$("sets").setValues({
	width:250,
	height:480
});
@relatedapi:
	api/ui.property_getvalues.md
@related: 
	desktop/property_sheet.md
@relatedsample:
	07_property/01_init.html

@template:	api_method
@descr:

The methods allows for setting several values at at time. Pass the **IDs** of the necessary property elements and their
values into the function. 

The second parameter helps manipulate values set separately. By delaut, it is **false**. 

Take that we set new value for a **width** input from the property described above. 

~~~js
$$('sets').setValues({ width:100 }); 
~~~

In this case, the value for the **height** is lost. To avoid this, set the **update** parameter to *true*. 
The property sheet will be updated with a new value for **width** input while **height** value remains unchanged. 

~~~js
$$('sets').setValues({ width:"Paris" }, true); 
~~~


