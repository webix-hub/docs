cells
=============

@short:
	defines the content of the abslayout

@type: array
@example:
// layout with absolutely positioned elements
webix.ui({
	view:"abslayout",
	cells:[
		{ view:"text", label:"Name", labelAlign:"right",
			top: 100, left:350, width:200, height: 40 },
		{ view:"text", label:"Email", labelAlign:"right",
			top: 100, left:550, width:200, height: 40 },
		{ view:"textarea", label:"My text box", labelPosition:"top",
			top: 140, left:100, width:650, height: 100 },
		{ view:"button", label:"My text box",
			top: 260, left:260, width:400, height: 40 }
	]
});


// layout with absolutely and relatively positioned elements
webix.ui({
    view:"abslayout",
    cells:[
        { view:"list", select:true,
            item:{
                height:62,
                template:"#rank#. #title# <br> #votes#",
            },
            data:big_film_set,
            relative:true 
        },
        { view:"button", value:"+", css:"addButton",
           bottom: 20, right:35, width:50, height: 60}
    ]
});



@template:	api_config
@descr:


