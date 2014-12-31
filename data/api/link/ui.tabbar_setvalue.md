@link: api/ui.button_setvalue.md

@example:

{ view:"tabbar", id:"tabs", type:"bottom",  options:[
				{ id:"one", value:"One" },
				{ id:"two", value:"Two"},
				{ id:"three", value:"Three"}
			]}
...

$$("tabs").setValue("two"); 
		//the second option will be selected
        
@relatedapi:
	api/link/ui.tabbar_getvalue.md
    api/link/ui.tabbar_value_config.md