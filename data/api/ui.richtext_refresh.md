@link: api/ui.button_refresh.md

@short:
	repaints richtext editor

@example:
webix.ui({
    container:"box",
    view:"form", 
    elements:[
        { view: "richtext", id: "rt1", value: "My text" }
    ]
});
...
$$("rt1").define("value","New text");
$$("rt1").refresh(); // value:"My text" -> value:"New text"
