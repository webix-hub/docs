select
=============


@short:
	enables/disables item selection or multiselection in grouplist

@type: boolean,string 
@values:

- true				allows single selection
- false				denies selection
- "multiselect"		allows multiselection

@example:
webix.ui({
	view:"list",
    select:true,
    ..//config
});

@template:	api_config
@related:
	desktop/selection.md
@relatedsample:
	06_dataview/04_manipulations/02_selection.html
@defined:	ui.dataview	
