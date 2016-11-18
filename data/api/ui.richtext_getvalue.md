@link: api/ui.button_getvalue.md


@short:
	returns the current value of the richtext editor

@example:
webix.ui({
    view:"form", 
    elements:[
        { view: "richtext", id: "rt1", value: "Some text" }
    ]
});

$$("rt1").getValue(); // returns "Some text"

@relatedapi:
	api/ui.richtext_setvalue.md
    api/link/ui.form_getvalues.md