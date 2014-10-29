removeOption
=============

@short: removes the option of a segmented button 
	

@params:
- id 	id	 ID of the option being removed


@example:
function del_tab(){
	var tab_id = $$("tabs").getValue();
	$$("tabs").removeOption(tab_id);
}

@defined: ui.segmented

@template:	api_method


@relatedapi: 
	api/ui.segmented_addoption.md
    
@related: 
	desktop/tabs_options.md
    
@relatedsample:
	02_toolbar/19_tabs_on_the_go.html
    
@descr:


