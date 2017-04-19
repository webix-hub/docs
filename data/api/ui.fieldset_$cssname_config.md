$cssName
=============

@short:  name of the widget the CSS of which you want to inherit for a custom widget
	

@type:string
@default:"webix_fieldset"
@example:

webix.protoUI({
	name:"myfieldset",
    $cssName:"fieldset",
    //other properties and methods
}, webix.ui.view);

webix.ui({ view:"myfieldset"});

@related:
- desktop/extending_components.md

@template:	api_config
@descr:


By default, a custom widget inherits API of the widgets and mixins that are used for it, but not CSS. 

