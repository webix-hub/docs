@link: api/ui.segmented_onbeforetabclick_event.md

@short: fires before a tab is clicked

@params:

- id		number/string		the id of the tab


@example:

tab.attachEvent("onBeforeTabClick", function(id){
	//code
});

@relatedapi:

- api/link/ui.tabbar_onaftertabclick_event.md
- api/link/ui.tabbar_onitemclick_event.md
- api/link/ui.tabbar_click_config.md
- api/link/ui.tabbar_on_click_other.md

@descr:

Unlike the [onItemClick](api/link/ui.tabbar_onitemclick_event.md) event this one watches clicks over separate tabs 
and passes the ID of a clicked tab into its handler. 