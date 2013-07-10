@link: api/ui.button_getvalue.md

@example:
webix.ui({
	view:"segmented", value:"one", options:[
			{ id:"one", value:"One" },
			{ id:"two", value:"Two"},
			{ id:"three", value:"Three"}
		]
});
...
$$(segmented1).getValue();
		//returns "one"
        
@relatedapi:
	api/link/ui.segmented_setvalue.md
    api/link/ui.segmented_value_config.md
    