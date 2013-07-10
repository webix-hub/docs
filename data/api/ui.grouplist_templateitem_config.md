templateItem
=============


@short:
	an html template that defines data that will be presented in grouplist

@type: template
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
	api/ui.grouplist_templategroup_config.md
    api/ui.grouplist_templateback_config.md
    api/link/ui.grouplist_templatecopy_config.md
@defined:	ui.grouplist	
@descr:


