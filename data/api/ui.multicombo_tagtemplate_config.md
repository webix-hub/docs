tagTemplate
=============

@short:
	specifies the template that will be shown in the multicombo's tag, if api/ui.multicombo_tagmode_config.md is set to false

@type: function

@example:

{   
    view:"multicombo", 
    label:"Name", 
    labelPosition: "top",
    value:"1,7,9,12",
    tagMode: false,
    tagTemplate: function(values){
		return (values.length? values.length+" item(s) selected":"");
	},   
}


@template:	api_config
@descr:

The function takes an array of the selected items' ids as an argument.

The default tagTemplate is the following: 

~~~js
tagTemplate: function(values){
   return (values.length? values.length+" item(s)":"");
}
~~~

@related:
desktop/multicombo.md#manipulatingtags

@relatedapi:
api/ui.multicombo_tagmode_config.md

@relatedsample:
60_pro/02_form/07_multicombo_tag.html
