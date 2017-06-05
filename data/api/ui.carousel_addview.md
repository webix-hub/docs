addView
=============


@short:
	adds a new view to a carousel

@params:

- view		object		the configuration of the new view
* index		number		the index a new view will be added at

@returns:
- id		string|number		the id of the new view 

@example:
webix.ui({
	id:"mycarousel",
    cols:[...]
});
// adds template as a third cell to some existing carousel
$$("mycarousel").addView({ template:"New one" }, 2);

@template:	api_method
@relatedapi:
	api/ui.carousel_removeview.md
    api/_ui.md
@related:
	desktop/dynamic_layout.md
@relatedsample: 
	01_layout/13_reconfiguration.html

@descr:

The method works for layout rows and cols, multiview cells, accordion and carousel panels, toolbar and form controls.


