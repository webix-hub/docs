removeView
=============


@short:
	removes the specified view of a layout-like component
	

@params:
- id		id,object		the id or object of the child view which needs to be removed


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



