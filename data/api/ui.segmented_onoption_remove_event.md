onOptionRemove
====================

@short:fires after the option (tab, segment) has been removed

@params:
- id		string, number		option ID
- value		string		option value

@example:
tabbar.attachEvent("onOptionRemove", function(id, value){
	//code
});

@defined: ui.segmented

@related: 
	desktop/segmented.md
	desktop/tabs_options.md
@relatedapi:
	api/ui.segmented_removeoption.md
@template:api_event
@descr:
