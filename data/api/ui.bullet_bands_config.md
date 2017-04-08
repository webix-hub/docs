bands
=============

@todo:
	check 

@short:
	sets an array of custom bands' values and colors for Bullet Graph 

@type: array
@example:
webix.ui({
    view:"bullet", 
    id:"b1",
    minRange:0, 
    maxRange:120,
    bands:[
        { value:120, color:"#b4e5fb"},
        { value:80, color:"#55c2f3"},
        { value:60, color:"#1997dc"},
    ]
});



@template:	api_config
@descr:
The default bands settings are the following:

~~~js
bands:[
	{ value:100, color:"#5be5d6"},
	{ value:80, color:"#fff07e" },
	{ value:60, color:"#fd8b8c" } 
]
~~~


@related:
desktop/bullet_graph.md

@relatedsample:
60_pro/16_bulletgraph/01_init.html
