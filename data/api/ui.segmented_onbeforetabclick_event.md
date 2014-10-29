onBeforeTabClick
===================

@short: fires before a segment is clicked

@example:

segmented.attachEvent("onBeforeTabClick", function(id, e){
	//code
});

@defined: ui.button

@relatedapi:

- api/ui.segmented_onaftertabclick_event.md
- api/link/ui.segmented_onitemclick_event.md
- api/link/ui.segmented_click_config.md
- api/link/ui.segmented_on_click_other.md

@template: api_event

@descr:

Unlike the [onItemClick](api/link/ui.segmented_onitemclick_event.md) event this one watches clicks over separate tabs 
and passes the ID of a clicked tab into its handler. 