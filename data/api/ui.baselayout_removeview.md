removeView
=============


@short:

	removes view from multiview or layout
	

@params:
- id		id		id of child view, which need to be removed


@example:

webix.ui({
   cols:[
      { id:"mytemplate1" },
      { id:"mytemplate2" },
      { id:"mytemplate3" }
   ]
})
...
$$("somelayout").remove("mytemplate2");

@template:	api_method
@relatedapi:
	api/ui.baselayout_addview.md
@related:
	desktop/dynamic_layout.md

@descr:


