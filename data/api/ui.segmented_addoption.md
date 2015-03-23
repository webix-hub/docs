addOption
=============


@short: add a new option (segment) to the button
	

@params:
- id		id			ID of the new option
- value		any			value of the new option
* show 		boolean		makes the newly added option active. 'false' by default
* index		number		position to insert to. Last, by default

@defined:ui.segmented
	

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

In case of a tabbar, the method can as well take a more extensive option configuration of a tab. 

And the parameters are as follows: 

- **obj** (obj) - tab configuration;
* **show**	(boolean) - makes the newly added option active;
* **index** (number) - position to insert to. Last, by default. 

~~~js
tabbar.addOption({id:1, value:"New", close:true, icon:"cog"}, true);
~~~




