onChange
=============


@short: fires when data in the input or related form/toolbar is changed
	

@params:
- newv	string		the new value typed into the field
- oldv	string		the initial value in the field

@example: 
$$("form1").elements["login"].attachEvent("onChange", function(newv, oldv){
	//"login" is name of related form field
	webix.message("Value changed from: "+oldv+" to: "+newv);
});    
//or
$$("form1").attachEvent("onChange", function(newv, oldv){
	webix.message("Value changed from: "+oldv+" to: "+newv);
});  

@relatedapi:
	api/link/ui.form_validate.md
    api/values_onvalues_event.md
@relatedsample: 
	13_form/02_api/07_onchange_event.html
@related:
	desktop/form.md

@template:	api_event
@descr:

The event fires only in case some value is changed by user in browser. If values are set programmatically (with api/values_setvalues.md method)
the api/values_onvalues_event.md will fire instead.


