@link: api/ui.baseview_disable.md

@short: disables the tooltip (tooltips won't appear anymore)
	

@example:
myView = webix.ui({
    view:"dataview",
    ...
    tooltip:{
        template:" Rating: #rating# <br> Votes: #votes#"
    }
});


$$('dataview1').config.tooltip.disable();

@template:	api_method
@descr:


@relatedapi:
	api/link/ui.tooltip_enable.md
@related:
	desktop/tooltip.md
@relatedsample: