value
=============

@short:
	sets the ids of items that should be initially selected (moved to the right list)

@type: string,array
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
13_form/01_controls/25_dbllist.html


@seolinktop: [javascript ui components library](https://webix.com)
@seolink: [javascript list](https://webix.com/widget/list/)