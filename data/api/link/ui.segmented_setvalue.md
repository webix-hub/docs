@link: api/ui.button_setvalue.md

@short:
	selects the option by its ID

@example:
webix.ui({
    view:"segmented", options:[
            { id:"one", value:"One" },
            { id:"two", value:"Two"},
            { id:"three", value:"Three"}
        ]
});
...
$$(segmented1).setValue('two');
	//choose the second option
    
@relatedapi:
	api/link/ui.segmented_getvalue.md
    api/link/ui.segmented_value_config.md