onSubmit
==============================
@short: fires when enter key is pressed for a focused control in the form

@params: 

- view		object	an object of a control for which "enter" was stroked
- ev	object		keydown event object

form.attachEvent("onSubmit", function(view, ev){
    webix.message("Enter for a control with "+view.config.id+" ID");
));

@template:	api_event

@related: 
	desktop/form.md
    desktop/htmlform.md

@descr: