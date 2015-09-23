@link: api/ui.baselayout_addview.md

@params:

- view		object		configuration of new view

@example:
$$("tabview1").addView({
	header:"New Tab",
	body:{
		template:"New content "+webix.uid()
	}
});

@relatedsample: 
	20_multiview/13_tabview_dynamic.html