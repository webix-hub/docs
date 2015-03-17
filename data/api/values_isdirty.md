isDirty
=============


@short: checks whether changes within form were made
	

@returns:
id_dirty		boolean		returns **true** if the data was changed

@example:
    if(form.isDirty()){
        if(!form.validate())
            return false;
        form.save();
    }
 };
 
@relatedapi:
	api/values_setdirty.md
@related:
	desktop/form_tasks.md
@relatedsample:
	13_form/02_api/10_binding.html

@template:	api_method
@descr:

With form, the method is used before [data validation](desktop/data_validation.md) and saving  it to the component and server. 
