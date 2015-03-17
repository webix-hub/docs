addView
=============


@short:
	add new view to layout-like component

@params:

- view		object		configuration of new view
* index		number			index, at which new view will be added

@returns:
- view		WebixView		new view object

@example:
webix.ui({
	id:"mylayout",
    rows:[...]
});
//adds template as third cell to some existing layout
$$("smylayout").addView({ template:"New one" }, 2);

@template:	api_method
@relatedapi:
	api/ui.baselayout_removeview.md
    api/_ui.md
@related:
	desktop/dynamic_layout.md
@relatedsample: 
	01_layout/13_reconfiguration.html

@descr:

The method works for layout rows and cols, multiview cells, accordion and carousel panels,  toolbar and form controls.


