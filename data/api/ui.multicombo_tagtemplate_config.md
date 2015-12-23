tagTemplate
=============

@short: defines template of input values
	
@type: function
@example:

{ view:"multicombo", tagMode:false, tagTemplate: function(values){
	return (values.length? values.length+" item(s) selected":"");
}}

@relatedapi:
	api/ui.multicombo_tagmode_config.md
@relatedsample:
	60_pro/02_form/07_multicombo_tag.html

@template:	api_config
@descr:

The setting should be coupled with <b>tagMode</b> disabled, otherwise the titles of the chosen values 
will be displayed in the input field.

By default, tagTemplate shows the count of the chosen values as "Two item(s)".


