filterPlaceholder
=============

@short:
	sets a placeholder for the filter input

@type: boolean|string

@example:

// removes the label of the filter field and uses its text as placeholder
webix.ui({
    view:"pivot", 
    filterPlaceholder:true
});

// sets a static placeholder for all filter fields
webix.ui({
    view:"pivot", 
    filterPlaceholder:"Enter data.."
});

@template:	api_config
@descr:

@relatedsample:

61_pivot/01_init/06_custom_titles.html
