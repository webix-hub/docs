@link: api/ui.gage_scale_config.md

@short:
	defines the scale configuration of the bullet graph

@type: object
@default:see the details
@example:
webix.ui({
	view:"bullet", 
    id:"b1",
	minRange:0, 
	maxRange:120,
	value:40, 
	label:"2015 YTD", 
	placeholder:"expected #value#", 
	scale: { 
		step:20,
		template:"#value#%"
	}
});

@template:	api_config
@descr:
The default scale config is:

~~~js
scale:{ 
	step:10
}
~~~

@related:
desktop/bullet_graph.md

@relatedsample:
60_pro/16_bulletgraph/01_init.html

@todo:check

