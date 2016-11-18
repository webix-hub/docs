@link: api/ui.button_focus.md

@short:
	sets focus to the richtext

@example:
webix.ui({
    view: "richtext", 
    id: "rt1", 
    label: "Some text"
});
 
$$("rt1").focus();
