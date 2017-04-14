labelBottomRight
=============

@short:
	sets a label for the right list at the bottom

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
api/ui.dbllist_labelbottomleft_config.md
api/ui.dbllist_labelright_config.md

@related:
desktop/double_list.md

@relatedsample:
05_list/18_dbllist.html