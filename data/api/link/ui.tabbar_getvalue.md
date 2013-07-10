@link: api/ui.button_getvalue.md

@example:

{ view:"tabbar", type:"bottom", value:"one", options:[
				{ id:"one", value:"One" },
				{ id:"two", value:"Two"},
				{ id:"three", value:"Three"}
			]}
...
$$("tabbar1").getValue(); // returns "one"

@relatedapi:
	api/link/ui.tabbar_setvalue.md
    api/link/ui.tabbar_value_config.md
            