@link: api/ui.segmented_onaftertabclick_event.md

@short: fires after a tab has been clicked

@params:

- id		number/string		the id of the tab that was clicked

@example:

tab.attachEvent("onAfterTabClick", function(id){
	//code
});

@defined:ui.button

@relatedapi:

- api/link/ui.tabbar_onbeforetabclick_event.md
- api/link/ui.tabbar_onitemclick_event.md
- api/link/ui.tabbar_click_config.md
- api/link/ui.tabbar_on_click_other.md

@template: api_event

@descr:

Unlike the [onItemClick](api/link/ui.tabbar_onbeforetabclick_event.md) event this one watches clicks over separate tabs and 
passes the ID of a clicked tab into its handler. 