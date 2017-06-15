setValue
=============


@short:
	specifies the item(s) that should be selected

@params:

- ids		string,array		the  id (ids) of the items to select



@example:
webix.ui({
    view:"dbllist", 
    id:"dbl1",
    data:[
        {id:"1", value:"Guest"},
        {id:"2", value:"Member"},
        {id:"3", value:"Moderator"},
        {id:"4", value:"Admin"},
        {id:"5", value:"Super Admin"}
    ]
});
 
$$("dbl1").setValue([1,3]); 

//or
$$("dbl1").setValue("1,3"); 

@template:	api_method
@descr:

@relatedapi:
- api/ui.dbllist_getvalue.md
- api/ui.dbllist_value_config.md

@related:
desktop/double_list.md

@relatedsample:
13_form/01_controls/25_dbllist.html

@seolinktop: [ui widget library](https://webix.com)
@seolink: [lists in javascript](https://webix.com/widget/list/)