focus
=============

@short:
sets focus to the widget

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
 
$$("dbl1").focus();


@template:	api_method

@related: 
	desktop/uimanager.md
   	desktop/double_list.md
@descr:


@seolinktop: [javascript ui framework](https://webix.com)
@seolink: [javascript library list](https://webix.com/widget/list/)