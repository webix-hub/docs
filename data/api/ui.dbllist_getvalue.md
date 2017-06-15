getValue
=============

@short:
	returns the ids of the selected items (items of the right list) 


@returns:

- value		string		the list of selected items' ids

@params:

@example:
webix.ui({
 	view:"dbllist", 
    id:"dbl1",
    value:"1,2",
    data:[
    	{id:"1", value:"Guest"},
        {id:"2", value:"Member"},
        {id:"3", value:"Moderator"},
        {id:"4", value:"Admin"},
        {id:"5", value:"Super Admin"}
    ]
});

var values = $$("dbl1").getValue(); // returns "1,2"

@template:	api_method
@descr:

@relatedapi:
- api/ui.dbllist_setvalue.md
- api/ui.dbllist_value_config.md

@related:
desktop/double_list.md

@relatedsample:
13_form/01_controls/25_dbllist.html

@seolinktop: [js frameworks](https://webix.com)
@seolink: [lists in javascript](https://webix.com/widget/list/)