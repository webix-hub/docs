labelBottomLeft
=============

@short:
	sets a label for the left list at the bottom

@type: string
@example:
webix.ui({ 
	view:"dbllist", 
    value:"1,2", 
    labelBottomLeft:"All groups",
    labelBottomRight:"Selected",
    data:[
        {id:"1", value:"Contacts"},
        {id:"2", value:"Products"},
        {id:"3", value:"Reports"},
        {id:"4", value:"Customers"},
        {id:"5", value:"Deals"}
    ]
});


@template:	api_config
@descr:

@relatedapi:
api/ui.dbllist_labelbottomright_config.md
api/ui.dbllist_labelleft_config.md

@related:
desktop/double_list.md

@relatedsample:
13_form/01_controls/25_dbllist.html