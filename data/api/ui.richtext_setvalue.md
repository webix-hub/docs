@link: api/ui.button_setvalue.md

@short:
	sets a new value for the richeditor control

@params:
- value		string 	a new value for the richeditor control

@example:
webix.ui({
    container:"box",
    view:"form", 
    elements:[
        { view: "richtext", id: "rt1", value: "Some text" }
    ]
});
...
$$("rt1").setValue("Some text");
$$("rt1").refresh();

@relatedapi:
	api/ui.richtext_getvalue.md