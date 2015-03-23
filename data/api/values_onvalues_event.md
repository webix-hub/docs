onValues
=============

@short: fires after values have been set within toolbar or form
	
@params:

@example:
$$("myform").attachEvent("onValues", function(){
	//code
});

@related:
	desktop/form_tasks.md
    desktop/form.md
    desktop/toolbar.md
@relatedapi:
	api/values_setvalues.md
    api/values_onvalues_event.md

@template:	api_event
@descr:

The event fires when form or toolbar values are set programmatically with the help of a [setValues()](api/values_setvalues.md) method. 

When values are changed by user in browser, the [onChange](api/values_onvalues_event.md) event is triggered instead. 

