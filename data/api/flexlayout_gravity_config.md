gravity
=============

@short:
	sets the view gravity (1 by default)

@type: number
@example:

//equal sizes
webix.ui({
	view:"flexlayout",
    cols:[
        { gravity:1, template:"left" },
        { gravity:1, template:"right" }
    ]
});
 
//the left area two times wider than the right one
webix.ui({
	view:"flexlayout",
    cols:[
        { gravity:2, template:"left" },
        { gravity:1, template:"right" }
    ]
});

@template:	api_config
@descr:


