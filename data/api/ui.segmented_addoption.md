addOption
=============


@short: add a new option (segment) to the button
	

@params:
- id		id		ID of the new option
- value		any		value of the new option
* show 		bool	makes the newly added option active. 'false' by default

@returns: 
- id	string	the option ID
	

@example:
function open_new_tab(id){
			var item = $$('list1').getItem(id);
			$$('tabs').addOption(item.id, item.title, true);
			};

@template:	api_method

@relatedapi: 
	api/ui.segmented_removeoption.md
    
@related: 
	desktop/tabs_options.md
    
@relatedsample:
	02_toolbar/19_tabs_on_the_go.html

@descr:


