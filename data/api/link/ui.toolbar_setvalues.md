@link: api/values_setvalues.md

@example:
webix.ui({
	view:"toolbar",
    id:"toolbar1",
    elements:[
        { type:"text", name:"field_a" },
        { type:"text", name:"field_b" },
    ]
});

function set_toolbar(){
    $$("sheet").setValues({
       field_a: "London", 
       field_b: "New York"
    });
};


@descr:

The method allows setting several values at a time. 
Data **names** of these values must coincide with values of the [name](api/link/ui.text_name_config.md) parameters of the corresponding toolbar elements. 
