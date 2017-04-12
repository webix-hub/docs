value
=============

@todo:
	check


@short:
	sets the ids of items initially moved to the list of selected items

@type: string|array
@example:
webix.ui({
    view:"dbllist", 
    value:"1,2",
    data:[
        {id:"1", value:"Guest"},
        {id:"2", value:"Member"},
        {id:"3", value:"Moderator"}
    ]
});

@template:	api_config
@descr:

@relatedapi:
- api/ui.dbllist_setvalue.md
- api/ui.dbllist_getvalue.md

@related:
desktop/double_list.md

@relatedsample:
05_list/18_dbllist.html
