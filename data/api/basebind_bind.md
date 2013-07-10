bind
=============


@short:
	binds components

@params:
- target		object		an object that binds to the calling component
- rule		function		sets the rule according which components will be bound
* format		string		the format of bound data




@example:
$$('mylist').bind('form1', function(list_data, form_data){
	if (!form_data) return false;
	return list_data.some_property == form_data.some_property;
});

@template:	api_method
@defined:	BaseBind	
@related:
	desktop/data_binding.md
    desktop/binding_details.md
@relatedsample:
	13_form/02_api/10_binding.html
@descr:

Behavior of data binding differs for different components a lot. Basically, it fills component with data based on selection in the master component. 

The technique allows you to create complex data updates schemes, but you can ignore it
as the same use case can be implemented through events and custom logic. 




