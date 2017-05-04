$cssName
=============

@short:  name of the widget the CSS of which you want to inherit for a custom widget
	

@type:string
@example:

webix.protoUI({
	name:"myslider",
    $cssName:"slider webix_rangeslider",
    //other properties and methods
}, webix.ui.slider);

webix.ui({ view:"myslider"});

@related:
- desktop/extending_components.md

@template:	api_config
@descr:


By default, a custom widget inherits API of the widgets and mixins that are used for it, but not CSS. 




