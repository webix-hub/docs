tagMode
=============

@short: defines if the selected items are displayed in the input
	

@type: boolean
@default: true
@example:

{	
	view:"multicombo", 
	label:"Name", 
    labelPosition: "top",
	value:"1,7,9,12",
	tagMode: false
    ...
}



@template:	api_config
@descr:

If the parameter is set to false, the default tags with items won't be shown in multicombo. 

Just one tag will be displayed and you can define its content with the help of the api/ui.multicombo_tagtemplate_config.md property.


@related:
desktop/multicombo.md#manipulatingtags

@relatedapi:
api/ui.multicombo_tagtemplate_config.md

@relatedsample:
60_pro/02_form/07_multicombo_tag.html