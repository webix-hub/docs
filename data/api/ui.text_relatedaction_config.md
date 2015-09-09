relatedAction
=============


@short: action to call when value of cell changes

@values:

- show		if true, shows related view
- enable	if true, enabled related view
- false		cancels actions with related view
	

@type: string
@example:

webix.ui({
   view:"checkbox", relatedAction:"show", relatedView:"detailsArea"
})


@template:	api_config
@descr:

Possible values are "show", "enable"  