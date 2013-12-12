activeContent
=============


@short:
	sets controls that will be use in view template
    
@type: object


@example:
webix.protoUI({
	name:"activeList"
},webix.ui.list,webix.ActiveContent);
        
webix.ui({
	view: "activeList",
	id:"mylist",
	data: dataset,
	activeContent:{
		deleteButton:{
			id:"deleteButtonId",
			view:"button",
			label:"Delete",
			width:120,
			earlyInit:true
		}
	},
	template: "#title#<div style='float:right'>{common.deleteButton()}</div>",
	type: {
		height:45
	}
});

@relatedsample:
	05_list/15_active_content.html
    
@template:	api_config
@defined:	ActiveContent	


@descr:




