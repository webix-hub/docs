@link: api/ui.button_label_config.md

@example:
webix.ui({
    container:"box",
    cols:[
        { view:"form", elements:[
            { view:"checkbox", id:"ch1", label:"Block pop-up windows"},
            { view:"checkbox", id:"ch2", label:"Load images automatically"},
            { view:"checkbox", id:"ch3", label:"Enable JavaScript"} 
        ]}
    ]
});