getValue
=============


@todo:
	check

@short:
	returns the value(s) selected in the Double List (values moved to the right list) 


@returns:

- value		string		the selected value(s)


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

$$("dbl1").getValue(); // returns "1,2"

@template:	api_method
@descr:

@relatedapi:
- api/ui.dbllist_setvalue.md
- api/ui.dbllist_value_config.md

@related:
desktop/double_list.md

@relatedsample:
05_list/18_dbllist.html