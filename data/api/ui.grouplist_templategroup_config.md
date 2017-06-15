templateGroup
=============


@short:
	an html template that defines data that will be presented in group header in the collapsed state

@type: string, function
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
@related:
	desktop/grouplist.md
@relatedsample:
	05_list/04_list_grouping.html
@relatedapi:
	api/ui.grouplist_templateback_config.md
    api/ui.grouplist_templateitem_config.md
    api/link/ui.grouplist_templatecopy_config.md
@defined:	ui.grouplist	
@descr:




@seolinktop: [web development library](https://webix.com)
@seolink: [lists in javascript](https://webix.com/widget/list/)