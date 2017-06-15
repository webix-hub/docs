templateBack
=============


@short:
	an html template that defines data that will be presented in group header in the expanded state

@type: string, template
@example:
webix.ui({ 
    view:"grouplist", 
	id:"mylist", 
    url:"data.xml", 
    datatype:"xml",
	type:{
		templateItem:"#name# (#author#)",
	    templateGroup:"#name#",
		templateBack:"#name#",
	}
});

@template:	api_config
@defined:	ui.grouplist	
@related:
	desktop/grouplist.md
@relatedsample:
	05_list/04_list_grouping.html
@relatedapi:
	api/ui.grouplist_templategroup_config.md
    api/ui.grouplist_templateitem_config.md
    api/link/ui.grouplist_templatecopy_config.md
@descr:




@seolinktop: [web ui framework](https://webix.com)
@seolink: [list ui](https://webix.com/widget/list/)