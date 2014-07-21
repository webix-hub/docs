removeView
=============


@short:
	removes view from layout-like component
	

@params:
- id		id		id of child view, which need to be removed


@example:

webix.ui({
	id:"mylayout"
    cols:[
      { id:"mytemplate1" },
      { id:"mytemplate2" },
      { id:"mytemplate3" }
   ]
})
...
$$("mylayout").removeView("mytemplate2");

@template:	api_method
@relatedapi:
	api/ui.baselayout_addview.md
    api/_ui.md
@related:
	desktop/dynamic_layout.md
@relatedsample: 
	01_layout/13_reconfiguration.html

@descr:

The method works for layout rows and cols, multiview cells, accordion and carousel panels,  toolbar and form controls.



