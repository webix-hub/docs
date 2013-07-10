@link: api/ui.baseview_enable.md

@short: enables the tooltip (after it has beed disabled)
	
	

@example:
myView = webix.ui({
    view:"dataview",
    ...
    tooltip:{
        template:" Rating: #rating# <br> Votes: #votes#"
    }
});


$$('dataview1').config.tooltip.enable();


@template:	api_method
@descr:


@relatedapi:
	api/link/ui.tooltip_disable.md
@related:
	desktop/tooltip.md
    
@relatedsample: