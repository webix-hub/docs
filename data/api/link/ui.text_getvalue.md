@link: api/ui.button_getvalue.md

@example:
webix.ui({
    view:"form", 
    elements:[
        {  view: "richtext", id: "rt1", label: "Some text"}
    ]
});

$$('rt1').getValue(); // returns "Some text"